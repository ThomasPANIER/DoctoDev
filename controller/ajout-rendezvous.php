<?php

require "../model/RendezvousManager.php";
require "../model/PatientManager.php";
include "../service/form.php";

$patientManager = new PatientManager();
$patients = $patientManager->getPatients();

$rendezvousManager = new RendezvousManager();

if(!empty($_POST) && isset($_POST["addRendezvous"])) {

  $patientSelect = $_POST["idPatients"];
  $selection = $patientManager->getPatientId($patientSelect);

  foreach($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  if(empty($_POST["dateHour"])) {
    $error = "Vous n'avez pas rentré de date";
  }

  if(!$error) {

    $rendezvous = new Rendezvous($_POST);

    if($rendezvousManager->addRendezvous($rendezvous, $selection['id'])) {
      header("Location:liste-rendezvous.php");
      exit;
    }
  }

}

include "../view/ajout-rendezvous-view.php";
