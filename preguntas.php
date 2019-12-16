<?php  
session_start();
require_once 'controladores/funciones.php';
include("preguntasfrecuentes.php");
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!--CSS-->
    	<link rel="stylesheet" href="css/styles.css">
		<!--FONTAWOSON-->
    	<script src="https://kit.fontawesome.com/3b98d2cca3.js" crossorigin="anonymous"></script>
	</head>
	<body>
		<?php require_once 'partials/header.php' ?>
			<section class="container-fluid faq">
				<div class="row">
					<div class="col-md-2"></div>
					<div class="col-md-8">
						<h4>Preguntas Frecuentes:</h4>
						<br>
						<?php foreach ($preguntas as $value) : ?>
						<div class="preguntas">
							<p><?= $value["pregunta"] ?></p>
							<p>Respuesta: <?= $value["respuesta"] ?></p>
						</div>
						<?php endforeach; ?>
					</div>
					<div class="col-md-2"></div>
				</div>
			</section>
			<?php require_once 'partials/footer.php' ?><!--Footer -->	

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>