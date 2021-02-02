<?php 
session_start();

?>

<!DOCTYPE html>
<html>
  <head>
    <title>Hack</title>
    <link href="layout/bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>
  <body>
    
    <div class="container">
      <div class="row">
        <div class="col" style="text-align: center;">
          <?php 
            if(!empty($_SESSION['enigme1'])){echo('<a href="php/password.php" ><button type="button" class="btn btn-success btn-lg btn-block">Etape 1 <i class="fas fa-check"></i></button></a>');}
            else{echo('<a href="php/password.php" ><button type="button" class="btn btn-secondary btn-lg btn-block">Etape 1 <span class="badge bg-success">Nouveau</span></button></a>');}
          ?>
        </div>
        <div class="col" style="text-align: center;">
          <?php 
            if(!empty($_SESSION['enigme2'])){echo('<a href="html/fonction.html" ><button type="button" class="btn btn-success btn-lg btn-block">Etape 2 <i class="fas fa-check"></i></button></a>');}
            else{echo('<a href="html/fonction.html" ><button type="button" class="btn btn-secondary btn-lg btn-block">Etape 2 <span class="badge bg-success">Nouveau</span></button></a>');}
          ?>
        </div>
        <div class="col" style="text-align: center">
          <?php
            if(!empty($_SESSION['enigme3'])){echo('<a href="php/IP.php" ><button type="button" class="btn btn-success btn-lg btn-block">Etape 3 <i class="fas fa-check"></i></button></a>');}
            else{echo('<a href="php/IP.php" ><button type="button" class="btn btn-secondary btn-lg btn-block">Etape 3 <span class="badge bg-success">Nouveau</span></button></a>');}
          ?>
        </div>
      </div>
    </div>
    <form method="post" action="php/result.php" class="container" style="margin-bottom : 5%;">
      <div class="row" style="margin-top: 30%;">
        <div class="card text-center">
          <div class="card-header">
              Réponse finale
          </div>
          <div class="card-body">
              <h5 class="card-title">Saurez vous retrouver tous les indices ?  </h5>
              <div class="form-floating">
                  <input type="text" placeholder="Votre réponse" class="form-control" id="floating" name="final_answer" required>
                  <label for="floating">Réponse</label>
              </div>
          </div>
          <div class="card-footer text-muted">
              <input class="btn btn-secondary" type="submit"></button>
          </div>
        </div>
      </div>
    </form>
  </body>
<script src="https://kit.fontawesome.com/16ae438362.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="layout/js/jquery.js"></script>
</html>