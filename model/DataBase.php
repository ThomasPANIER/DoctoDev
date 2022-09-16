<?php
// Classe pour se connecter à la base de données

abstract class DataBase {

  const HOST  = "localhost";
  const NAME = "hospitalE2N";
  const LOGIN = "root";
  const PASSWORD = "";

  public static function bddConnect() {
    try {
      $db = new PDO("mysql:host=" . self::HOST .";dbname=" . self::NAME , self::LOGIN, self::PASSWORD);
      $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
      return $db;
    }

    catch(Exception $error) {
      echo "Nous n'arrivons pas à nous connecter" . $error->getMessage() . "<br/>";
      die();
    }
  }

}
