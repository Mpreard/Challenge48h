<?php 
    session_start();
    
    $final_answer = $_GET['final_answer'];
    if($final_answer === 'DUEL'){
        $_SESSION['enigme2'] = "Validé";
        header('Location: ../index.php');
    }
?>

<!DOCTYPE html>
<html>
  <head>
    <title>Question finale</title>
    <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../layout/css/main.css" rel="stylesheet">
  </head>
<body>
    
    <form method="get" action="enigme2.php" class="container">
        <div class="row" style="margin-top: 20%;">
            <div class="card text-center">
                <div class="card-header">
                    Question finale
                </div>
                <div class="card-body">
                    <h5 class="card-title">C'est bientôt fini ! Rendez-vous sur l'url trouvée</h5>
                    <h6 class="card-subtitle mb-2 text-muted mb-4">Rassemblez tous les indices fournis </h6>
                    <div class="form-floating">
                        <input type="text" placeholder="Votre réponse doit contenir 4 caractères" class="form-control" id="floating" name="final_answer" maxlength="4" required>
                        <label for="floating">Votre réponse doit contenir 4 chiffres</label>
                    </div>
                </div>
            <div class="card-footer text-muted">
                <input class="btn btn-secondary" type="submit"></button>
            </div>
        </div>
    </form>

    <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-top: 2%;">
        <a href="equation.php">
            <button class="btn btn-dark" type="button"><i class="fas fa-arrow-left"></i> Précédent</button>
        </a>
    </div>
</body>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/jquery.js"></script>
<script src="https://kit.fontawesome.com/16ae438362.js" crossorigin="anonymous"></script>
</html>
