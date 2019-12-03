<?php  ?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Document</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
		<!--CSS-->
    	<link rel="stylesheet" href="css/styles.css">

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
				    	<li><a href="login.php">Login</a></li>
				    	<li><a href="registro.php">Registro</a></li>
				    	<li><a href="preguntas.php">Preguntas Frecuentes</a></li>
				    	<li><a href="perfil.php">Mi Perfil</a></li>
				    	<li><a href="carrito.php"><i class="fas fa-shopping-basket p-2"></i></a></li>
				    	
				    </ul>
				  </div>
				</nav>
			</header>
			
			
<div class="conteiner-fluid contacto">

  <div class="row">
	
    <!--Grid column-->
    <div class="col-md-2"></div>
    <div class="col-md-4">

      <!--Form with header-->
      <div class="card">

        <div class="card-body">
          <!--Header-->
          <div class="form-header blue accent-1">
            <h3><i class="fas fa-envelope"></i> Contactanos:</h3>
          </div>

          <p>Consultas y sujerencias.</p>
          <br>

          <!--Body-->
          <div class="md-form">
            <i class="fas fa-user prefix grey-text"></i>
            <label for="form-name">Nombre</label>
            <input type="text" id="form-name" class="form-control">
           
          </div>

          <div class="md-form">
            <i class="fas fa-envelope prefix grey-text"></i>
            <label for="form-email">Email</label>
            <input type="text" id="form-email" class="form-control">
            
          </div>

          <div class="md-form">
            <i class="fas fa-tag prefix grey-text"></i>
            <label for="form-Subject">Asunto</label>
            <input type="text" id="form-Subject" class="form-control">
            
          </div>

          <div class="md-form">
            <i class="fas fa-pencil-alt prefix grey-text"></i>
             <label for="form-text">Comentario</label>
            <textarea id="form-text" class="form-control md-textarea" rows="3"></textarea>
           
          </div>

          <div class="text-center mt-4">
            <button class="btn btn-primary">Enviar</button>
          </div>

        </div>

      </div>
      

    </div>
    
    <div class="map col-md-4">

      <!--Google map-->
      <div id="map-container-google-11" class="z-depth-1-half map-container-6" style="height: 400px">
        <iframe src="https://maps.google.com/?ll=-26.8167,-65.2167&z=13&output=embed"
          frameborder="0" style="border:0" allowfullscreen></iframe>
      </div>
				
      <br>
      <!--Buttons-->
      <div class="row text-center">
        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-map-marker-alt"></i></a>
          <p>San Miguel de Tucuman</p>
          <p>Tucuman</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-phone"></i></a>
          <p>381-5555555</p>
          <p>Lunes - Viernes, 8:00-22:00</p>
        </div>

        <div class="col-md-4">
          <a class="btn-floating blue accent-1"><i class="fas fa-envelope"></i></a>
          <p>informacion@gmail.com</p>
          <p>ventas@gmail.com</p>
        </div>
      </div>

    </div>
    
<div class="col-md-2"></div>
  </div>
</div>

<div class="container-fluid footer"><!-- Footer -->
			<div class="row">
				<div class="col-lg-5 col-xs-12 about-company ">
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

</div>
<!--Section: Contact v.1-->




			<!--
			<section class="container-fluid">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<form>
							<h4>Contacto</h4>
							<div class="form-group">
								<label for="nombres">Nombre y Apellido</label>
								<input id="nombres" type="text" class="form-control" placeholder="Nombre y Apellido">
							</div>
							<div class="form-group">
								<label for="email">Email</label>
								<input id="email" type="email" class="form-control" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="asunto">Asunto</label>
								<input id="asunto" type="text" class="form-control" placeholder="Asunto">
							</div>
							<div class="form-group">
								<label for="mensaje">Mensaje</label>
								<textarea id="mensaje" class="form-control" rows="8"></textarea>
							</div>
							<button type="submit" class="btn btn-default">Enviar</button>
							<button type="reset" class="btn btn-default pull-right">Cancelar</button>
						</form>
					</div>
					<div class="col-md-4"></div>
				</div>
			</section>
		</div>
		-->




		<script
			  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>