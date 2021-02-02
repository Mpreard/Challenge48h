<?php 
    session_start();
    
    $last_answer = htmlspecialchars($_POST['answer_function']);
    $equation_answer = htmlspecialchars($_POST['answer_equation']);
    $result = "jvvru<11yyy0iqqing0eqo1ocru1B6904379:;:./30778;;97.5c.;2{.37098j.;704v1fcvc?#5o8#3g3#5o6#3ucqEnXDnwQexpSX[:hJgwQS#4g2#9k35534#:k8878";

        if($equation_answer === "2" && $equation_answer = $result){
        header('Location: enigme2.php');
    } 
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Equation</title>
    <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">
    <link href="../layout/css/main.css" rel="stylesheet">
  </head>
<body>
    <form method="POST" action="equation.php" class="container">
        <div class="row" style="margin-top: 10%;">
            <div class="card text-center">
                <div class="card-header">
                    L'équation
                </div>
                <div class="card-body">
                    <h5 class="card-title" style="margin-bottom: 2%;">Tu chauffes, mais ta tête aussi </h5>
                    <input type="text" value="<?php echo($last_answer);?>" class="form-control answer" name="answer_function">
                    <p class="d-grid gap-2 d-md-flex justify-content-md-start "> Votre précédente réponse </p>

                    <div class="form-floating">
                        <input type="text" placeholder="Votre réponse " class="form-control answer" id="floatingAnswer" name="answer_equation" required>
                        <label for="floatingAnswer">Votre réponse</label>
                    </div>
                </div>
                <div class="card-footer text-muted">
                    <input class="btn btn-secondary" type="submit"></button>
                </div>
            </div>
        </div>
        <div class="d-grid gap-2 d-md-flex justify-content-md-start" style="margin-top: 2%;">
        <a href="../html/fonction.html">
            <button class="btn btn-dark" type="button"><i class="fas fa-arrow-left"></i> Précédent</button>
        </a>
    </div>
    </form>
    <div class="container" style="margin-top: 2%;">
        <div class="row">
            <div class="card" style="width: 38rem;">
                <div class="card-body">
                    <h5 class="card-title">Les équations</h5>
                    <h6 class="card-subtitle mb-2 text-muted mb-4">Saurez vous en venir à bout ? <br> Le docteur Electrolux y est parvenu ! </h6>
                    <p class="card-text">26x² - 13x³ + 52x = 104</p>
                    <p class="card-text">8x² - 16x + 5x = 10 </p>
                    <p class="card-text">26x² - 32x + 52 = 104</p>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/jquery.js"></script>
<script src="https://kit.fontawesome.com/16ae438362.js" crossorigin="anonymous"></script>
</html>