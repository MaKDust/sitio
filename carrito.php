<?php  ?>

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
				    	<li><a href="perfil.php">lucky.jesse</a></li>
				    	<li><a href="carrito.php"><i class="fas fa-shopping-basket p-2"></i></a></li>
				    </ul>
				  </div>
				</nav>
			</header>
			




<div class="container-fluid carrito">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-md-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</h5>
							</div>
							<div class="col-md-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continua comprando
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">
							<a href="descripcionProducto.php"><img class="img-responsive" src="http://placehold.it/100x70"></a>
						</div>
						<div class="col-md-4">
							<a href="descripcionProducto.php"><h4 class="product-name"><strong>Producto 1</strong></h4></a>
							<h4><small>Descripcion</small></h4>
						</div>
						<div class="col-md-6">
							<div class="col-xs-6 text-right">
								<h6 class="pull-left"><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-2">
							<a href="descripcionProducto.php"><img class="img-responsive" src="http://placehold.it/100x70"></a>
							
						</div>
						<div class="col-md-4">
							<a href="descripcionProducto.php"><h4 class="product-name"><strong>Producto 2</strong></h4></a>
							<h4><small>Descripcion</small></h4>
						</div>
						<div class="col-md-6">
							<div class="col-xs-6 text-right">
								<h6 class="pull-left"><strong>35.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-md-9">
								<h6  class="text-left">Actualizar cantidad</h6>
							</div>
							<div class="col-md-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Actualizar
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-md-9">
							<h4 class="text-right">Total <strong>$60.00</strong></h4>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-success btn-block">
								Finalizar Compra
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
			
<footer class="container-fluid footer"><!-- Footer -->
			<div class="row">
				<div class="col-lg-5 col-xs-12 about-company">
					<h2>Redes Sociales</h2>
				    <p class="pr-5 text-white-50">Seguinos en nuestras redes y enterate de todas nuestras ofertas de ultima hora</p>
				    <p>
				    	<a href="#"><i class="fab fa-facebook-square"></i></a>
						<a href="#"><i class="fab fa-twitter-square"></i></a>
						<a href="#"><i class="fab fa-linkedin"></i></a>
						<a href="#"><i class="fab fa-youtube-square"></i></a>
						<a href="#"><i class="fab fa-instagram"></i></a>
				    </p>
				</div>
				<div class="col-lg-3 col-xs-12 links">
					<h4 class="mt-lg-0 mt-sm-3">Mapa del Sitio</h4>
				    <ul class="m-0 p-0">
				    	<li>- <a href="index.php">Inicio</a></li>
				    	<li>- <a href="contacto.php">Contacto</a></li>
					    <li>- <a href="preguntas.php">Preguntas Frecuentes</a></li>
					</ul>
				</div>
				<div class="col-lg-4 col-xs-12 location">
					<h4 class="mt-lg-0 mt-sm-4">Contactos</h4>
				    <p><i class="fas fa-home"></i></i>  Calle Falsa Sin Numero</p>
				    <p class="mb-0"><i class="fa fa-phone p-3"></i>  (381) 555-5555</p>
				    <p><i class="fa fa-envelope-o mr-3"></i>  info@sitio.com</p>
				</div>
			</div>
		</footer><!--/Footer -->





		</div>
		

		

		<script
			  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>