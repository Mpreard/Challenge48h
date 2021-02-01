<?php
  // Se connecter à la base de données
  include("db_connect.php");
  $request_method = $_SERVER["REQUEST_METHOD"];

  switch($request_method)
  {
    case 'GET':
      if(!empty($_GET["object"]))
      {
        // Récupérer un seul produit
        $object = intval($_GET["object"]);
        getEnigme($object);
      }
      else
      {
        // Récupérer tous les produits
        getEnigme();
      }
      break;
    default:
      // Requête invalide
      header("HTTP/1.0 405 Method Not Allowed");
      break;
  }

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

?>