<?php

require "model/PatientManager.php";

$patientManager = new PatientManager();
$patients = $patientManager->getPatients();

$error = "Aucun patient n'est enregistré";

include "view/liste-patients-view.php";
