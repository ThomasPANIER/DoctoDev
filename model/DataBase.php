<?php

require "DataBaseConnect.php";

abstract class DataBase
{

  protected PDO $db;

  public function __construct() {
    $this->db = DataBaseConnect::getPDOConnexion();
  }

}
