<?php

require "../model/RendezvousManager.php";
require "../model/PatientManager.php";

$rendezvousManager = new RendezvousManager();
$patientManager = new PatientManager();

$error = "Aucun rendez-vous n'est enregistré";

if(isset($_GET["id"]) && !empty($_GET["id"])) {

  $rendezvous = $rendezvousManager->getRendezvousById($_GET["id"]);
//  var_dump($rendezvous);
  $rdvPatientId = $rendezvousManager->getRdvPatientId($_GET["id"]);
//  var_dump($rdvPatientId);
  $rdvPatient = $patientManager->getPatientById($rdvPatientId['id']);
//  var_dump($rdvPatient);

  if(!$rendezvous) {
    $error = "Le rendez-vous sélectionné n'existe pas, essayez une nouvelle sélection.";
  }

}
else {
  $error = "Vous n'avez pas correctement sélectionné le rendez-vous, essayez une nouvelle sélection.";
}

if(isset($_POST['confirm'])) {

  $deletePatient = $rendezvousManager->deleteRendezvous($_GET["id"]);

  if($deletePatient) {
    header("Location: liste-rendezvous.php");
    exit;
  }

}

include "../view/details-rendezvous-view.php";
