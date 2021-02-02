<?php 
    $last_answer = htmlspecialchars($_GET['answer_fonction']);
?>
<!DOCTYPE html>
<html>
  <head>
    <title>Adresse</title>
    <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">
  </head>
<body>
    <form method="get" action="adresse.php" class="container IP">
        <div class="row" style="margin-top: 40%;">
            <div class="card text-center">
                <div class="card-header">
                    L'équation
                </div>
                <div class="card-body">
                    <h5 class="card-title" style="margin-bottom: 2%;">Tu chauffes, mais ta tête aussi </h5>
                    <input type="text" value="<?php echo($last_answer);?>" class="form-control" id="floatingPassword" name="answer_adress" maxlength="4" required>
                </div>
            <div class="card-footer text-muted">
                <input class="btn btn-secondary" type="submit"></button>
            </div>
        </div>
    </form>
    <div class="container">
        <div class="row">
            <div class="col">
                <p> ax² - 2ax + bx - 2b = 0</p>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/jquery.js"></script>
<script src="https://kit.fontawesome.com/16ae438362.js" crossorigin="anonymous"></script>
</html>