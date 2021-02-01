<?php
$host = 'localhost';
$port = "3306";
$bdd = 'api';
$user = 'mpreard';
$password ='7b3097628';

try {
	//On test la connexion à la base de donnée
    $pdo = new PDO('mysql:host='.$host.';port='.$port.';dbname='.$bdd, $user, $password);

} catch(Exception $e) {
	//Si la connexion n'est pas établie, on stop le chargement de la page.
	reponse_json($success, $data, 'Echec de la connexion à la base de données');
    exit();

}