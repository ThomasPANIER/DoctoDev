<?php
// Classe permettant de récupérer les rendez-vous stockés en base de données
require "model/entity/Rendezvous.php";

class RendezvousManager
{
  private PDO $db;

  function __construct()
  {
    $this->db = DataBase::bddConnect();
  }

}
