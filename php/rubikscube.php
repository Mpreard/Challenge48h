<?php  

session_start();

?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../layout/css/rubikscube.css">
    <script type="text/javascript" src="../layout/js/rubikscube.js"></script>

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
<div id="wrapD3Cube">
    <div id="D3Cube">
        <div id="side1"></div>
        <div id="side2"></div>
        <div id="side3"></div>
        <div id="side4"></div>
        <div id="side5"></div>
        <div id="side6"></div>
    </div>
</div>

    <a onclick="turnLeft()">Left</a>
    <a onclick="turnRight()">Right</a> <br />
    <a onclick="flipCube()">Flip</a>

</body>


</html>

