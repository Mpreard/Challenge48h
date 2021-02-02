<?php
session_start();

$user_answer = $_POST['final_answer'];

if(empty($user_answer)){
    header('Location: ../index.php');
}

if($user_answer === 'JRP1DUELP4ZK'){
    echo('<h1>Félicitation. Vous avez gagné</h1>');
} else {
    echo('<h1>Vous avez perdu</h1>');
}
?>