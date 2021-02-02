<?php
  // Se connecter à la base de données
  include("db_connect.php");
  $request_method = $_SERVER["REQUEST_METHOD"];
  
  function getEnigme()
  {
    global $conn;
    $query = "SELECT * FROM enigme";
    $response = array();
    $result = mysqli_query($conn, $query);
    while($row = mysqli_fetch_array($result))
    {
      $response[] = $row;
    }
    header('Content-Type: application/json');
    echo json_encode($response, JSON_PRETTY_PRINT);
  }

  if(!empty($_GET["objects"])){
  // Récupérer un seul produit
  $objects = intval($_GET["objects"]);
  getEnigme($objects);
  } else {
  // Récupérer tous les produits
  getEnigme();
  }
 
  echo('ouais y\'a tout le monde squatte dans le vip');
?>