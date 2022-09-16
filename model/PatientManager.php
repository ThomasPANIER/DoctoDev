<?php
// Classe permettant de récupérer les patients stockés en base de données
require "model/entity/Patient.php";

class PatientManager
{
  private PDO $db;

  function __construct()
  {
    $this->db = DataBase::bddConnect();
  }

}
