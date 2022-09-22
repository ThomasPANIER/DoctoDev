<?php

require "../model/PatientManager.php";

$patientManager = new PatientManager();

if (!empty($_POST) && isset($_POST["search"])) {

  $_POST['terme'] = htmlspecialchars($_POST['terme']);
  $terme['terme'] = $_POST['terme'];

  if(empty($_POST["terme"])) {
    $error = "Vous n'avez pas effectué de recherche";
  }
  if(!$error) {
    $patients = $patientManager->search($terme['terme']);
  }

}

include "../view/searchForm-view.php";
