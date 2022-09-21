<?php

require "../model/RendezvousManager.php";
//require "../model/PatientManager.php";

$rendezvousManager = new RendezvousManager();
$rendezvous = $rendezvousManager->getRendezvous();
//var_dump($rendezvous);
//$patientManager = new PatientManager();
//$patients = $patientManager->getPatients();
//var_dump($patients);

$error = "Aucun rendez-vous n'est enregistré";

include "../view/liste-rendezvous-view.php";
