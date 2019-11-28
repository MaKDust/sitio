<?php  ?>
<?php include("preguntasfrecuentes.php"); ?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<link rel="stylesheet" type="text/css" href="css/styles.css">
	</head>
	<body>
		
		<div>
			<header>
				<nav class="navbar navbar-default">
				  <div class="container">
				    <div class="navbar-header">
				      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
				        <span class="sr-only">Toggle navigation</span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				        <span class="icon-bar"></span>
				      </button>
				      <a class="navbar-brand" href="index.php">Sitio</a>
				    </div>
		
				    <ul class="nav navbar-nav navbar-right">
				    	<li><a href="login.php">Login</a></li>
				    	<li><a href="registro.php">Registro</a></li>
				    	<li><a href="contacto.php">Contacto</a></li>
				    </ul>
				  </div>
				</nav>
			</header>
			
			<section class="container-fluid">
				<h4>Preguntas Frecuentes:</h4>
				<?php foreach ($preguntas as $value) : ?>
					<div class="item">
						<p><?= $value["pregunta"] ?></p>
						<p>Respuesta: <?= $value["respuesta"] ?></p>
					</div>
				<?php endforeach; ?>
			</section>
		</div>
		
		<script
			  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>