<?php 
session_start();
require_once 'controladores/funciones.php';

?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Sitio</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

		<!--CSS-->
    	<link rel="stylesheet" href="css/styles.css">
		<!--FONTAWOSON-->
    	<script src="https://kit.fontawesome.com/3b98d2cca3.js" crossorigin="anonymous"></script>

	</head>
	<body>	
		 <?php require_once 'partials/header.php' ?>
			
		<div class="container-fluid carrusel"><!-- Carrusel -->
			<div class="row">
				<div class="banner col-md-12">
					<div id="myCarousel" class="carousel slide" data-ride="carousel">
				        <ol class="carousel-indicators"><!-- Indicados -->
							<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
							<li data-target="#myCarousel" data-slide-to="1"></li>
							<li data-target="#myCarousel" data-slide-to="2"></li>
				  		</ol>
					    <div class="carousel-inner"><!-- Wrapper for slides -->
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
					   <!-- controles deracha izquierda -->
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
		</div><!-- FIN CARRUSEL-->					
		
		<div class="container-fluid"><!-- PRODUCTOS -->
			
			<div class="col-md-3 column productbox">
				<a href="descripcionProducto.php"><img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive"></a>
				<div class="producttitle">
					<p>Producto</p>
				</div>
				<div class="productprice">
					<div class="pull-right">
						<a href="descripcionProducto.php" class="btn btn-danger btn-sm" role="button">COMPRA</a>
					</div>
					<div class="pricetext">
						<p>$8.95</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 column productbox">
				<a href="descripcionProducto.php"><img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive"></a>
				<div class="producttitle">
					<p>Producto</p>
				</div>
				<div class="productprice">
					<div class="pull-right">
						<a href="descripcionProducto.php" class="btn btn-danger btn-sm" role="button">COMPRA</a>
					</div>
					<div class="pricetext">
						<p>$8.95</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 column productbox">
				<a href="descripcionProducto.php"><img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive"></a>
				<div class="producttitle">
					<p>Producto</p>
				</div>
				<div class="productprice">
					<div class="pull-right">
						<a href="descripcionProducto.php" class="btn btn-danger btn-sm" role="button">COMPRA</a>
					</div>
					<div class="pricetext">
						<p>$8.95</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 column productbox">
				<a href="descripcionProducto.php"><img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive"></a>
				<div class="producttitle">
					<p>Producto</p>
				</div>
				<div class="productprice">
					<div class="pull-right">
						<a href="descripcionProducto.php" class="btn btn-danger btn-sm" role="button">COMPRA</a>
					</div>
					<div class="pricetext">
						<p>$8.95</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 column productbox">
				<a href="descripcionProducto.php"><img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive"></a>
				<div class="producttitle">
					<p>Producto</p>
				</div>
				<div class="productprice">
					<div class="pull-right">
						<a href="descripcionProducto.php" class="btn btn-danger btn-sm" role="button">COMPRA</a>
					</div>
					<div class="pricetext">
						<p>$8.95</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 column productbox">
				<a href="descripcionProducto.php"><img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive"></a>
				<div class="producttitle">
					<p>Producto</p>
				</div>
				<div class="productprice">
					<div class="pull-right">
						<a href="descripcionProducto.php" class="btn btn-danger btn-sm" role="button">COMPRA</a>
					</div>
					<div class="pricetext">
						<p>$8.95</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 column productbox">
				<a href="descripcionProducto.php"><img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive"></a>
				<div class="producttitle">
					<p>Producto</p>
				</div>
				<div class="productprice">
					<div class="pull-right">
						<a href="descripcionProducto.php" class="btn btn-danger btn-sm" role="button">COMPRA</a>
					</div>
					<div class="pricetext">
						<p>$8.95</p>
					</div>
				</div>
			</div>
			<div class="col-md-3 column productbox">
				<a href="descripcionProducto.php"><img src="http://placehold.it/460x250/e67e22/ffffff&text=HTML5" class="img-responsive"></a>
				<div class="producttitle">
					<p>Producto</p>
				</div>
				<div class="productprice">
					<div class="pull-right">
						<a href="descripcionProducto.php" class="btn btn-danger btn-sm" role="button">COMPRA</a>
					</div>
					<div class="pricetext">
						<p>$8.95</p>
					</div>
				</div>
			</div>
		</div><!--/Productos -->

		<div class="container-fluid footer"><!-- Footer -->
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
				    	<li>- <a href="login.php">Login</a></li>
					    <li>- <a href="registro.php">Registro</a></li>
					    <li>- <a href="contacto.php">Contacto</a></li>
					    <li>- <a href="preguntas.php">Preguntas Frecuentes</a></li>
					    <li>- <a href="perfil.php">Mi Perfil</a></li>
				    </ul>
				</div>
				<div class="col-lg-4 col-xs-12 location">
					<h4 class="mt-lg-0 mt-sm-4">Contactos</h4>
				    <p><i class="fas fa-home"></i></i>  Calle Falsa Sin Numero</p>
				    <p class="mb-0"><i class="fa fa-phone p-3"></i>  (381) 555-5555</p>
				    <p><i class="fa fa-envelope-o mr-3"></i>  info@sitio.com</p>
				</div>
			</div>
		</div><!--/Footer -->	

		<script	src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="crossorigin="anonymous"></script>
		<script	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
		crossorigin="anonymous"></script>


	</body>
</html>