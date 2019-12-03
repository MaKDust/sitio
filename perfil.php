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
				    	<li><a href="contacto.php">Contacto</a></li>
				    	<li><a href="preguntas.php">Preguntas Frecuentes</a></li>
				    	<li><a href="carrito.php"><i class="fas fa-shopping-basket p-2"></i></a></li>
				    	<li><a href="perfil.php">lucky.jesse</a></li>

				    </ul>
				  </div>
				</nav>
			</header>
			
			<section class="container-fluid perfil">
				<div class="row">
					<div class="col-md-3"></div>
						<div class="col-md-6">
							<div class="card bg-secondary shadow">
								<div class="card-header bg-white border-0">
									<div class="row align-items-center">
										<div class="col-8">
											<h3 class="mb-0" style="margin-left: 15px;">Mi Perfil</h3>
										</div>
										<div class="col-4 text-right" style="margin-right: 15px;">
											<a href="#!" class="btn btn-sm btn-primary">Modificar</a>
										</div>
									</div>
								</div>
								<div class="card-body">
									<form>
										<h6 class="heading-small text-muted mb-4">Datos personales</h6>
										<div class="pl-lg-4">
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group focused">
														<label class="form-control-label" for="input-username">Apodo</label>
														<p>lucky.jesse</p>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label class="form-control-label" for="input-email">Email </label>
														<p>lucky@jesse.com</p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group focused">
														<label class="form-control-label" for="input-first-name">Nombre</label>
														<p>lucky</p>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group focused">
														<label class="form-control-label" for="input-last-name">Apellido</label>
														<p>jesse</p>
													</div>
												</div>
											</div>
										</div>
										<hr class="my-4">
										<!-- Direccion -->
										<h6 class="heading-small text-muted mb-4">Informacion de contacto</h6>
										<div class="pl-lg-4">
											<div class="row">
												<div class="col-md-12">
													<div class="form-group focused">
														<label class="form-control-label" for="input-address">Direccion</label>
														<p>25 de Mayo 772</p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4">
													<div class="form-group focused">
														<label class="form-control-label" for="input-city">Ciudad</label>
														<p>San Miguel de Tucuman</p>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group focused">
														<label class="form-control-label" for="input-country">Provincia</label>
														<p>Tucuman</p>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<label class="form-control-label" for="input-country">Codigo postal</label>
														<p>4000</p>
													</div>
												</div>
											</div>
										</div>
										<hr class="my-4">
									</form>
								</div>
							</div>
						</div>
				</div>
			</section>	
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
		</div><!--/Footer -->		

			<!--<section class="container-fluid perfil">
				<div class="banner col-md-2"></div>
				<div class="col-md-8">
					<div class="panel panel-default">
					  <div class="panel-body">
					    <h4>Perfil de Usuario</h4>
						<p>Nombre: </p> 
						<p>Apellido: </p>
						<p>Teléfono: </p>
						<p>Email: </p>
					  </div>
					</div>
				<div class="col-md-2"></div>
				</div>
				
			</section>-->
		</div>
		

		

		<script
			  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>