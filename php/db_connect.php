<?php 
try{
    $bdd = new PDO('mysql:host=mysql-mpreard.alwaysdata.net;dbname=mpreard_challenge', 'mpreard', 'Vipere25');
}
catch (Exception $e)
{
    die('Erreur : ' . $e->getMessage());
}
?>