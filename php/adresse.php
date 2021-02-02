<?php 
    session_start();

    $_SESSION['ip_address'] = $_SERVER['REMOTE_ADDR'];
    $ip_caracteres = str_replace(".", "",$_SESSION['ip_address']);
    $ip_last_caracteres = substr($ip_caracteres, -4);
    
    if($ip_last_caracteres === htmlspecialchars($_GET['answer_adress'])){
        header('Location: shark.php');
    }
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Adresse</title>
    <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../layout/css/main.css" rel="stylesheet">
  </head>
<body>
    
    <form method="get" action="adresse.php" class="container IP">
        <div class="row" style="margin-top: 40%;">
            <div class="card text-center">
                <div class="card-header">
                    L'adresse
                </div>
                <div class="card-body">
                    <h5 class="card-title">C'est bientôt fini ! </h5>
                    <div class="form-floating">
                        <input type="text" placeholder="Votre réponse doit contenir les 4 derniers chiffres" class="form-control" id="floatingPassword" name="answer_adress" maxlength="4" required>
                        <label for="floatingPassword">Votre réponse doit contenir les 4 derniers chiffres</label>
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
