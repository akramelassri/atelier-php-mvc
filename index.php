<?php
// Accès aux données
require 'Modele.php';
$billets = getBillets($bdd);

// Affichage

require 'vueAccueil.php';
