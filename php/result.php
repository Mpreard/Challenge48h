<?php
session_start();

$user_answer = $_POST['final_answer'];

if(empty($user_answer)){
    header('Location: ../index.php');
}

if($user_answer === 'JRP1DUELP4ZK'){
    header ("Content-type: image/jpeg");
    $image = imagecreatefromjpeg("../layout/img/victoire.jpg");
    imagejpeg($image);
} else {
    echo('<h1>Vous avez perdu</h1>');
}
?>