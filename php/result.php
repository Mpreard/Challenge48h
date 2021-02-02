<?php
session_start();

$user_answer = $_POST['final_answer'];

if(empty($user_answer)){
    header('Location: ../index.php');
}

if($user_answer === 'JRP1DUELP4ZK'){
    header ("Content-type: image/jpeg");
    $image = imagecreatefromjpeg("victoire.jpg");
    imagejpeg($image);

} else {
    header ("Content-type: image/jpeg");
    $image = imagecreatefromjpeg("defaite.jpg");
    imagejpeg($image);
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../layout/css/result.css" />
    <title>Document</title>
</head>
<body>
    
</body>
</html>