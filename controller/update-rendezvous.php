<?php

require "../model/RendezvousManager.php";
require "../model/PatientManager.php";

$patientManager = new PatientManager();
$patients = $patientManager->getPatients();

$rendezvousManager = new RendezvousManager();
$rendezvous = $rendezvousManager->getRendezvousById($_GET["id"]);

$rdvPatientId = $rendezvousManager->getRdvPatientId($_GET["id"]);
$rdvPatient = $patientManager->getPatientById($rdvPatientId['id']);

if(!empty($_POST) && isset($_POST["updateRendezvous"])) {

  $patientSelect = $_POST["idPatients"];
  $selection = $patientManager->getPatientId($patientSelect);
  $select = $selection['id'];

  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  $rendezvous = new Rendezvous($_POST);
  $rendezvousManager->updateRendezvous($rendezvous, $select);

}

include "../view/update-rendezvous-view.php";
