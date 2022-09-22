<?php

require "../model/RendezvousManager.php";

$rendezvousManager = new RendezvousManager();
$rendezvous = $rendezvousManager->getRendezvous();

$error = "Aucun rendez-vous n'est enregistré";

include "../view/liste-rendezvous-view.php";
