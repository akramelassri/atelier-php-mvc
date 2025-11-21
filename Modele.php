<?php

function getBillets() {
	$bdd = getPdo();
	$billets = $bdd->query('select BIL_ID as id, BIL_DATE as date,'
	. ' BIL_TITRE as titre, BIL_CONTENU as contenu from T_BILLET'
	. ' order by BIL_ID desc');

	return $billets;
}

function getPdo() {
$bdd = new PDO('mysql:host=localhost;dbname=monblog;charset=utf8','bloguser','bloguserpw');
return $bdd;
}
