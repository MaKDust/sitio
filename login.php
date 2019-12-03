<?php 


session_start();
require_once 'controladores/funciones.php';
$arrayDeErrores = "";

if($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if($arrayDeErrores) {
    // LOGUEO AL USUARIO
    $arrayUsuarios = abrirBBDD('usuarios.json');
    foreach ($arrayUsuarios as $usuarioJson) {
      $userFinal = json_decode($usuarioJson, true);
       if ($_POST['email'] == $userFinal['email']) {
         if (password_verify($_POST['password'], $userFinal['password'])) {
         	 $_SESSION['email'] = $userFinal['email'];
	       		if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {
	                setcookie('userEmail', $userFinal['email'], time() + 60 * 60 * 24 * 7);
	                setcookie('userPass', $userFinal['password'], time() + 60 * 60 * 24 * 7);
	            }

           header('Location: index.php');
         }
       }
     }
   }
}

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
				  </div>
				</nav>
			</header>
			


			<section class="container-fluid login">
				<div class="row">
					<div class="col-md-4"></div>
					<div class="col-md-4">
						<form id='' action='' method='post'>
							<h4>Inicio de Sesion</h4>
							<div class="form-group">
								<label for="email">Email</label>
								<input 
								type="email" 
								name='email' 
								id='email'
								class="form-control" 
								placeholder="Email" 
								value="<?= persistirDato($arrayDeErrores, 'email') ?>"
								>
								 <small class="text-danger">
								  <?= isset($arrayDeErrores['email'])?$arrayDeErrores['email']:"" ?>
								 </small>
							</div>
							<div class="form-group">
								<label for="password">Password</label>
								<input 
								type="password"  
								name='password' 
								id='password'
								class="form-control" 
								placeholder="Password"
								>
								<small class="text-danger">
								 <?= isset($arrayDeErrores['password'])?$arrayDeErrores['password']:""?>
								</small>
							</div>
							<div class="form-group">
            					<div class="form-check">
                					<input 
                					class="form-check-input" 
                					type="checkbox" 
                					id="recordarme" 
                					name="recordarme"
                					>
                					<label class="form-check-label" for="gridCheck">Recordarme como usuario</label>
            					</div>
       						 </div>
							<button type="reset" class="btn btn-danger">Cancelar</button>
							<button type="submit" class="btn btn-primary pull-right">Ingresar</button>
						</form>
					</div>
					<div class="col-md-4"></div>
				</div>
			</section>



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
				    	<li>- <a href="registro.php">Registro</a></li>
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