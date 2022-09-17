<?php

require "model/PatientManager.php";
//require "model/entity/Patient.php";

$patientManager = new PatientManager();

$error = "Aucun patient n'est enregistré";

if(isset($_GET["id"]) && !empty($_GET["id"])) {

  $showPatient = $patientManager->getPatientById($_GET["id"]);

  if(!$showPatient) {
    $error = "Le patient sélectionné n'existe pas, essayez une nouvelle sélection.";
  }

}
else {
  $error = "Vous n'avez pas correctement sélectionné le patient, essayez une nouvelle sélection.";
}

if(isset($_POST['confirm'])) {
  $deletePatient = $patientManager->deletePatient($_GET["id"]);

  if($deletePatient) {
    header("Location: liste-patients.php");
    exit;
  }
}

include "view/profile-patient-view.php";
