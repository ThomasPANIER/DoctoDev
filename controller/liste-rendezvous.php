<?php

require "../model/RendezvousManager.php";

$rendezvousManager = new RendezvousManager();
$rendezvous = $rendezvousManager->getRendezvous();

$error = "Aucun rendez-vous n'est enregistrĂ©";

include "../view/liste-rendezvous-view.php";
