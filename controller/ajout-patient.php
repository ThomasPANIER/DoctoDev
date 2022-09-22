<?php

require "../model/PatientManager.php";
include "../service/form.php";

$patientManager = new PatientManager();

if(!empty($_POST) && isset($_POST["addPatient"])) {

  foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  if(empty($_POST["lastname"])) {
    $error1 = "Vous n'avez pas rentré de nom";
  }
  if(empty($_POST["firstname"])) {
    $error2 = "Vous n'avez pas rentré de prénom";
  }
  if(empty($_POST["birthdate"])) {
    $error3 = "Vous n'avez pas rentré de date de naissance";
  }
  if(empty($_POST["phone"])) {
    $error4 = "Vous n'avez pas rentré de numéro de téléphone";
  }
  if(empty($_POST["mail"])) {
    $error5 = "Vous n'avez pas rentré d'adresse email";
  }

  if(!$error1 && !$error2 && !$error3 && !$error4 && !$error5) {

    $patient = new Patient($_POST);

    if($patientManager->addPatient($patient)) {
      header("Location:liste-patients.php");
      exit;
    }
  }

}

include "../view/ajout-patient-view.php";
