<?php

// Classe permettant de gérer les patients stockés en base de données

require_once "dataBase.php";
require "entity/Patient.php";

class PatientManager extends DataBase
{

  // Ajoute un nouveau patient
  /**
   * @param Patient $patient
   * @return bool
   */
  public function addPatient(Patient $patient) : bool {
    $query = $this->db->prepare(
      "INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
      VALUES (:lastname, :firstname, :birthdate, :phone, :mail)"
    );
    return $query->execute([
      "lastname" => $patient->getLastname(),
      "firstname" => $patient->getFirstname(),
      "birthdate" => $patient->getBirthdate(),
      "phone" => $patient->getPhone(),
      "mail" => $patient->getMail()
    ]);
  }

  // Récupère tous les patients
  /**
   * @return bool|array
   */
  public function getPatients(): bool|array
  {
    $query=$this->db->query("SELECT * FROM patients");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $key=>$patients){
      $result[$key] = new Patient($patients);
    }
    return $result;
  }

  // Récupère un patient par son id
  /**
   * @param $id
   * @return mixed
   */
  public function getPatientById($id): mixed
  {
    $query = $this->db->prepare("SELECT * FROM patients WHERE id=:id");
    $query->execute([
      "id" => $id
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) {
      $result= new Patient($result);
    }
    return $result;
  }

  // Supprime un patient
  /**
   * @param int $id
   * @return bool|PDOStatement
   */
  public function deletePatient(int $id): bool|PDOStatement
  {
    $query = $this->db->prepare("DELETE FROM patients WHERE id=:id");
    $query->execute(["id" => $id]);
    return $query;
  }

  // Récupère l'id du patient par son lastname
  /**
   * @param $lastname
   * @return mixed
   */
  public function getPatientId($lastname): mixed
  {
    $query = $this->db->prepare("SELECT id FROM patients WHERE lastname=:lastname");
    $query->execute([
      "lastname" => $lastname
    ]);
    return $query->fetch(PDO::FETCH_ASSOC);
  }

  // Met à jour les informations du patient
  /**
   * @param Patient $data
   * @return void
   */
  public function updatePatient(Patient $data)
  {
    $query = $this->db->prepare(
        "UPDATE patients
              SET lastname = :lastname, firstname = :firstname, birthdate = :birthdate, phone = :phone, mail = :mail
              WHERE id=:id"
      );
    $query->execute([
      "id" => $data->getId(),
      "lastname" => $data->getLastname(),
      "firstname" => $data->getFirstname(),
      "birthdate" => $data->getBirthdate(),
      "phone" => $data->getPhone(),
      "mail" => $data->getMail()
    ]);
  }


  // Récupère un rendez-vous et son patient
  /**
   * @param int $id
   * @return mixed
   */
  public function getPatientRendezvous(int $id): mixed
  {
    $query = $this->db->prepare(
      "SELECT appointments.*, patients.*
      FROM appointments
      LEFT JOIN patients
      ON appointments.idPatients = patients.id
      WHERE patients.id = :id");
    $query->execute([
      "id" => $id
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) {
      $result= new Rendezvous($result);
    }
    return $result;
  }

}
