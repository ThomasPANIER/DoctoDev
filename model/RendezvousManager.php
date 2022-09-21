<?php

// Classe permettant de récupérer les rendez-vous stockés en base de données

require_once "dataBase.php";
require "entity/Rendezvous.php";

class RendezvousManager extends DataBase
{

  // Ajoute un nouveau rendez-vous
  /**
   * @param Rendezvous $rendezvous
   * @param $selection
   * @return bool
   */
  public function addRendezvous(Rendezvous $rendezvous, $selection) : bool
  {
    $query = $this->db->prepare(
      "INSERT INTO appointments(dateHour, idPatients)
      VALUES (:dateHour, :idPatients)"
    );
    return $query->execute([
      "dateHour" => $rendezvous->getDateHour(),
      "idPatients" => $selection
    ]);
  }

  // Récupère tous les rendez-vous
  /**
   * @return bool|array
   */
  public function getRendezvous(): bool|array
  {
    $query=$this->db->query("SELECT * FROM appointments");
    $result = $query->fetchAll(PDO::FETCH_ASSOC);
    foreach($result as $key=>$rendezvous){
      $result[$key] = new Rendezvous($rendezvous);
    }
    return $result;
  }

  // Récupère un rendez-vous par son id
  /**
   * @param $id
   * @return mixed
   */
  public function getRendezvousById($id): mixed
  {
    $query=$this->db->prepare ("SELECT * FROM appointments WHERE id=:id");
    $query->execute([
      "id" => $id
    ]);
    $result = $query->fetch(PDO::FETCH_ASSOC);
    if ($result) {
      $result= new Rendezvous($result);
    }
    return $result;
  }

  // Récupère l'id du rendez-vous
  /**
   * @param $id
   * @return mixed
   */
  public function getRendezvousId($id): mixed
  {
    $query = $this->db->prepare("SELECT id FROM appointments WHERE id=:id");
    $query->execute([
      "id" => $id
    ]);
    return $query->fetch(PDO::FETCH_ASSOC);
  }

  // Récupère un rendez-vous et l'id du patient relié
  /**
   * @param int|null $id
   * @return mixed
   */
  public function getRdvPatientId(?int $id): mixed
  {
    $query = $this->db->prepare(
      "SELECT appointments.id, patients.id
            FROM appointments
            LEFT JOIN patients
            ON appointments.idPatients = patients.id
            WHERE appointments.id = :id");
    $query->execute([
      "id" => $id
    ]);
    return $query->fetch(PDO::FETCH_ASSOC);
  }

  // Supprime un rendez-vous
  /**
   * @param int $id
   * @return bool|PDOStatement
   */
  public function deleteRendezvous(int $id): bool|PDOStatement
  {
    $query = $this->db->prepare("DELETE FROM appointments WHERE id=:id");
    $query->execute(["id" => $id]);
    return $query;
  }

  // Modifie les informations du rendez-vous
  /**
   * @param Rendezvous $data
   * @param $select
   * @return void
   */
  public function updateRendezvous(Rendezvous $data, $select)
  {
    $query = $this->db->prepare(
      "UPDATE appointments
              SET dateHour=:dateHour, idPatients=:idPatients
              WHERE id=:id"
    );
    $query->execute([
      "id" => $data->getId(),
      "dateHour" => $data->getDateHour(),
      "idPatients" => $select
    ]);
  }

}
