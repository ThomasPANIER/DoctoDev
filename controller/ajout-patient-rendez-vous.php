<?php

require "../model/PatientRendezvousManager.php";
include "../service/form.php";

$patientRendezvousManager = new PatientRendezvousManager();

if(!empty($_POST) && isset($_POST["addPatientRendezvous"])) {

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
  if(empty($_POST["dateHour"])) {
    $error6 = "Vous n'avez pas rentré de date de rendez-vous";
  }

  if(!$error1 && !$error2 && !$error3 && !$error4 && !$error5 && !$error6) {

    $patient = new Patient($_POST);
    $rendezvous = new Rendezvous($_POST);

    $patientRendezvousManager->addPatientRendezvous($patient, $rendezvous);
    header("Location:liste-patients.php");
    exit;

  }

}

include "../view/ajout-patient-rendez-vous-view.php";
