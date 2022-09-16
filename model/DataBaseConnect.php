<?php
// Classe pour se connecter à la base de données

abstract class DataBase {

  const HOST  = "localhost";
  const NAME = "hospitalE2N";
  const LOGIN = "root";
  const PASSWORD = "";
  private static ?PDO $db = null;

  public static function bddConnect() {
    try {
      if (!self::$db) {
        $db = new PDO("mysql:host=" . self::HOST . ";dbname=" . self::NAME, self::LOGIN, self::PASSWORD);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        self::$db = $db;
      }
      return self::$db;
    }

    catch(Exception $error) {
      echo "Nous n'arrivons pas à nous connecter à la base de données." . "<br/> erreur: " . $error->getMessage();
      die();
    }
  }

}
