<?php

require "../model/PatientManager.php";
require "../model/RendezvousManager.php";

$patientManager = new PatientManager();
$patient = new Patient();

$rendezvousManager = new RendezvousManager();
$rendezvous = $rendezvousManager->getFirstRendezvous();

$error = "Aucun rendez-vous n'est enregistrĂ©";

include "../view/index-view.php";
