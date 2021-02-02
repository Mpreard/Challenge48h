<?php 
	session_start();
	$answer = $_POST['answer_rubiks'];
	$real_answer = 'P4ZK';
	if($answer === $real_answer){
		$_SESSION['enigme3'] = "Validé";
		header('Location: ../index.php');
	}
?>

<!doctype html>
<html>
	<head>
		<meta charset="utf-8" />
		<title></title>
		<script src="../layout/js/oz.js"></script>
		<script src="../layout/js/css3.oz.js"></script>
		<script src="../layout/js/rubikscube.js"></script>
		<script src="../layout/js/quaternion.js"></script>
		<link rel="stylesheet" href="../layout/css/rubikscube.css" />
		<meta name="viewport" content="width=device-width" />
		<meta name="apple-mobile-web-app-capable" content="yes" />
		<link href="../layout/bootstrap/css/bootstrap.css" rel="stylesheet">

	</head>

	<body>
		<form method="POST" action="rubikscube.php" class="container">
			<div class="row" style="margin-top: 10%;">
				<div class="card text-center">
					<div class="card-header">
						Le Rubik's cube
					</div>
					<div class="card-body">
						<h5 class="card-title">Le Rubik's cube du magicien d'Oz. L'ancienne console de salon  </h5>
						<p>Tricher est parfois la seule solution...Encore</p>
						<div class="form-floating">
							<input type="text" placeholder="Votre réponse" class="form-control" id="floatingReponse" name="answer_rubiks" required>
							<label for="floatingReponse">Votre réponse </label>
						</div>
					</div>
					<div class="card-footer text-muted">
						<input class="btn btn-secondary" type="submit"></button>
					</div>
				</div>
			</div>
		</form>
	</body>
	<body onload="new Rubik()">
       <!-- Tu penses avoir le Cube dans l'âme toi ? Oz pour voir -->
	</body>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.js"></script>
<script type="text/javascript" src="../layout/bootstrap/js/bootstrap.min.js"></script>
<script type="text/javascript" src="../layout/js/jquery.js"></script>
</html>
