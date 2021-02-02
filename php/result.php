<?php
session_start();

$user_answer = $_POST['final_answer'];

if(empty($user_answer)){
    header('Location: ../index.php');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/css/result.css" />
    <link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">
    <title>Document</title>
</head>
<body>
<?php
    if($user_answer === 'JRP1DUELP4ZK'){
        echo('<img src="../layout/assets/img/victoire.jpg" class="img-fluid" alt="Responsive image">');
    } else {
    echo('<img src="../layout/assets/img/defaite.jpg" class="img-fluid" alt="Responsive image">');
    }
?>
</body>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/jquery.js"></script>
</html>