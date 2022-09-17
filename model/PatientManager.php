<?php
// Classe permettant de récupérer les patients stockés en base de données
require "dataBase.php";
require "model/entity/Patient.php";

class PatientManager extends DataBase
{

  // Ajoute un nouveau patient
  public function addPatient(Patient $patient) : bool {
    $query = $this->db->prepare(
      "INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
      VALUES (:lastname, :firstname, :birthdate, :phone, :mail)"
    );
    return $query->execute([
      "lastname" => $patient->getlastname(),
      "firstname" => $patient->getfirstname(),
      "birthdate" => $patient->getbirthdate(),
      "phone" => $patient->getphone(),
      "mail" => $patient->getmail()
    ]);
  }

  // Récupère tous les patients
  public function getPatients(): bool|array
  {
    $response=$this->db->query("SELECT * FROM patients");
    $result = $response->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $key=>$patients){
      $result[$key] = new Patient($patients);
    }
    return $result;
  }

  // Récupère un patient par son id
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
  public function deletePatient($id) {
    $query = $this->db->prepare("DELETE FROM patients WHERE id=:id");
    $query->execute(["id" => $id]);
    return $query;
  }

}
