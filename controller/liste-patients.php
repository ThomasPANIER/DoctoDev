<?php

require "../model/PatientManager.php";

$patientManager = new PatientManager();
$patients = $patientManager->getPatients();

$error = "Aucun patient n'est enregistrĂ©";

include "../view/liste-patients-view.php";
