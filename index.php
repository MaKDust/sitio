<?php

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>


		<!--CSS-->
    	<link rel="stylesheet" href="css/styles.css">
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
				      <a class="navbar-brand" href="#">Sitio</a>
				    </div>
		
				    <ul class="nav navbar-nav navbar-right">
				    	<li><a href="login.php">Login</a></li>
				    	<li><a href="registro.php">Registro</a></li>
				    	<li><a href="contacto.php">Contacto</a></li>
				    	<li><a href="preguntas.php">Preguntas Frecuentes</a></li>
				    	<li><a href="perfil.php">Mi Perfil</a></li>
				    </ul>
				  </div>
				</nav>
			</header>
			
			<!-- Carrusel -->
			<div class="container-fluid">
			 <div id="myCarousel" class="carousel slide" data-ride="carousel">
			  <!-- Indicators -->
			   <ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			   </ol>

				<!-- Wrapper for slides -->
			   <div class="carousel-inner">

				<div class="item active">
				 <img src="img/banner1.jpg" alt="Los Angeles">
				 <div class="carousel-caption">
				  <h3>Aire</h3>
				  <p>Frescura este verano!</p>
				 </div>
				</div>

				<div class="item">
				 <img src="img/banner2.jpg" alt="Chicago">
				 <div class="carousel-caption">
				  <h3>Cuotas</h3>
				  <p>Pagalo como puedas!</p>
				 </div>
				</div>
					    
				<div class="item">
				 <img src="img/banner3.jpg" alt="New York">
				 <div class="carousel-caption">
				  <h3>Vacaciones!</h3>
				  <p>Escapate y disfruta!</p>
				 </div>
				</div>
					  
			   </div>

			   <!-- Left and right controls -->
				<a class="left carousel-control" href="#myCarousel" data-slide="prev">
				 <span class="glyphicon glyphicon-chevron-left"></span>
				 <span class="sr-only">Previous</span>
				</a>

				<a class="right carousel-control" href="#myCarousel" data-slide="next">
				 <span class="glyphicon glyphicon-chevron-right"></span>
				 <span class="sr-only">Next</span>
				</a>
			 </div>
			</div>					
					  
		</div>
		
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>