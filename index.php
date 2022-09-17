<?php

require "model/PatientManager.php";
//require "model/RendezvousManager.php";

$patientManager = new PatientManager();
$patient = new Patient();

include "view/index-view.php";
