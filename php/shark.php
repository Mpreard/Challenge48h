<?php 
    session_start();
    $answer = $_GET['answer_shark'];

    if($answer === 'pass'){
        header('Location: rubikscube.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Shark</title>
    <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>
<body>
    <form method="GET" action="shark.php" class="container">
        <div class="row" style="margin-top: 40%;">
            <div class="card text-center">
                <div class="card-header">
                    Shark
                </div>
                <div class="card-body">
                    <h5 class="card-title">Allez vous réussir à récupérer les bonnes informations ? </h5>
                    <a style="margin:2%;" type="button" href="../layout/file/twitter-pwd.pcap" download="twitter-pwd.pcap"><button type="button" class="btn btn-warning">Télécharger moi !</button></a>

                    <div class="form-floating">
                        <input type="text" placeholder="4 premier caractères du mot de passe " class="form-control" id="floatingPassword" name="answer_shark" maxlength="4" required>
                        <label for="floatingPassword">4 premier caractères du mot de passe</label>
                    </div>
                </div>
            <div class="card-footer text-muted">
                <input class="btn btn-secondary" type="submit"></button>
            </div>
        </div>
    </form>

    <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-top: 2%;">
        <a href="../index.php">
            <button class="btn btn-dark" type="button"><i class="fas fa-arrow-left"></i> Précédent</button>
        </a>
    </div>
</body>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/jquery.js"></script>
<script src="https://kit.fontawesome.com/16ae438362.js" crossorigin="anonymous"></script>
</html>
