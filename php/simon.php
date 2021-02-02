<?php 
  session_start();

  $answer = 'JRP1';
  
  if($answer === htmlspecialchars($_GET['answer_simon'])){
    $_SESSION['enigme1'] = "Validé";
    header('Location: ../index.php');
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <title>Simon Game</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../layout/css/simon.css">
  <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">

  <audio id="clip1">
  	<source src="https://s3.amazonaws.com/freecodecamp/simonSound1.mp3"></source>
  </audio>
  <audio id="clip2">
  	<source src="https://s3.amazonaws.com/freecodecamp/simonSound2.mp3"></source>
  </audio>
  <audio id="clip3">
  	<source src="https://s3.amazonaws.com/freecodecamp/simonSound3.mp3"></source>
  </audio>
  <audio id="clip4">
  	<source src="https://s3.amazonaws.com/freecodecamp/simonSound4.mp3"></source>
  </audio>
</head>

<body>
  <form method="get" action="simon.php" class="container">
    <div class="row" style="margin-top: 10%;">
      <div class="card text-center">
        <div class="card-header">
            Le simon
          </div>
          <div class="card-body">
              <h5 class="card-title">Serez vous retrouver tous les indices ?  </h5>
              <p>Tricher est parfois la seule solution... =D</p>
              <div class="form-floating">
                <input type="text" placeholder="Votre réponse" class="form-control" id="floatingReponse" name="answer_simon" required>
                <label for="floatingReponse">Votre réponse </label>
              </div>
          </div>
        <div class="card-footer text-muted">
            <input class="btn btn-secondary" type="submit"></button>
        </div>
    </div>
  </div>
  </form>

  <div id="outer-circle">
    <div id="topleft"></div>
    <div id="topright"></div>
    <div id="bottomleft"></div>
    <div id="bottomright"></div>
    <div id="inner-circle">
      <div id="title" class="font-effect-emboss">READY!</div>
      <div id="switches">
        <input type="checkbox" class="toggle" style="display: none;" id="on">
        <button class="button" id="start">Start</button>
      </div>
      <div id="turn"></div>
      <div class="text2">
        COUNT
      </div>
    </div>
  </div>

  <div class="container">
    <div class="row">
      <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-top: 2%;">
        <a href="password.php">
          <button class="btn btn-dark" type="button"><i class="fas fa-arrow-left"></i> Précédent</button>
        </a>
      </div>
    </div>
  </div>

<script  src="../layout/js/simon.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/jquery.js"></script>
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://kit.fontawesome.com/16ae438362.js" crossorigin="anonymous"></script>
</body>
</html>


