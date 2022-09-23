<?php
// Classe permettant de gérer les patients et les rendez-vous stockés en base de données

require_once "dataBase.php";
require "entity/Patient.php";
require "entity/Rendezvous.php";

class PatientRendezvousManager extends DataBase
{
  // Ajoute un nouveau patient et son rendez-vous

  /**
   * @param Patient $patient
   * @param Rendezvous $rendezvous
   * @return void
   */
  public function addPatientRendezvous(Patient $patient, Rendezvous $rendezvous) {
    $query1 = $this->db->prepare(
      "INSERT INTO patients(lastname, firstname, birthdate, phone, mail)
      VALUES (:lastname, :firstname, :birthdate, :phone, :mail)"
    );
    $query1->execute([
      "lastname" => $patient->getLastname(),
      "firstname" => $patient->getFirstname(),
      "birthdate" => $patient->getBirthdate(),
      "phone" => $patient->getPhone(),
      "mail" => $patient->getMail()
    ]);
    $lastInsertId = $this->db->query("SELECT id FROM patients ORDER BY id DESC LIMIT 0, 1");
    $result = $lastInsertId->fetch(PDO::FETCH_ASSOC);
    $query2 = $this->db->prepare(
      "INSERT INTO appointments(dateHour, idPatients)
      VALUES (:dateHour, :idPatients)"
    );
    $query2->execute([
      "dateHour" => $rendezvous->getDateHour(),
      "idPatients" => $result['id']
    ]);
  }

}
