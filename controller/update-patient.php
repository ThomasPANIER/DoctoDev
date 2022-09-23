<?php

require "../model/PatientManager.php";

$patientManager = new PatientManager();
$patient = $patientManager->getPatientById($_GET["id"]);

if(!empty($_POST) && isset($_POST["updatePatient"])) {

  foreach ($_POST as $key => $value) {
    $_POST[$key] = htmlspecialchars($value);
  }

  $patient = new Patient($_POST);
  $patientManager->updatePatient($patient);

}

include "../view/update-patient-view.php";
