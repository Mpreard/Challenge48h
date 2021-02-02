<?php
//Connection à la base de données
require('db_connect.php');

//Fetch password
$reponse = $bdd->query('SELECT password FROM password');
$password = $reponse->fetch();
?>


<!DOCTYPE html>
<html>
  <head>
    <title>Password</title>
    <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../layout/css/main.css" rel="stylesheet">
    <script src="https://kit.fontawesome.com/16ae438362.js" crossorigin="anonymous"></script>
  </head>
<body>
  <div class="container">
    <div class="row" style="margin-top: 40%;">
    <div class="card text-center">
  <div class="card-header">
    Le mot de passe 
  </div>
  <div class="card-body">
    <h5 class="card-title">La suite est juste là :</h5>
    <div class="form-floating">
      <input type="password" class="form-control" id="floatingPassword" value="<?php echo($password['password']);?>">
      <label for="floatingPassword">Password</label>
    </div>
  </div>
  <div class="card-footer text-muted">
  </div>
</div>
<div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-top: 2%;">
  <a href="rest.php">
    <button class="btn btn-dark" type="button"><i class="fas fa-arrow-left"></i> Précédent</button>
  </a>
</div>
</body>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/jquery.js"></script>
</html>




