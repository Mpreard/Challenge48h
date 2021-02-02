<?php
header('Content-Type: application/json');
require('../php/db_connect.php');

$requete = $bdd->prepare("SELECT `object` FROM `api`");
$requete->execute();
$retour['resultats'] = $requete->fetchAll();

echo json_encode($retour);
?>