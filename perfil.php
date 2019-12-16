<?php  	
session_start();
require_once 'controladores/funciones.php';

if (isset($_POST['enviarFoto'])) { 
	$foto = $_FILES['foto'];
	$nombreFoto = $_FILES['foto']['name'];
	$extensionFoto = $_FILES['foto']['type'];
	$nombreFotoTemporal = $_FILES['foto']['tmp_name'];
	$errorFoto = $_FILES['foto']['error'];
	$tamanioFoto = $_FILES['foto']['size'];

			$nombreNuevo = $_SESSION['telefono'].'.jpg';
			$destinoFoto = 'img/'.$nombreNuevo;
			$arrayDeErrores = validarRegistracion($_POST);
		    $_SESSION['nombrefoto'] = $nombreNuevo;
			move_uploaded_file($nombreFotoTemporal, $destinoFoto);
			header("Location: perfil.php?exito");
}

if($_SESSION['email']) {
	$arrayDeErrores = validarRegistracion($_POST);
    if($arrayDeErrores) {
	    $arrayUsuarios = abrirBBDD('usuarios.json');
	    foreach ($arrayUsuarios as $usuarioJson) {
	      $userFinal = json_decode($usuarioJson, true);
	       if ($_SESSION['email'] == $userFinal['email']) {
	       	if ($_SESSION['password'] = $userFinal['password']) {
	        	$_SESSION['nombre'] = $userFinal['nombre'];
	        	$_SESSION['apellido']  = $userFinal['apellido'];
		        $_SESSION['email'] = $userFinal['email'];
		        $_SESSION['telefono'] = $userFinal['telefono'];
		        $_SESSION['direccion'] = $userFinal['direccion'];
		        $_SESSION['ciudad'] = $userFinal['ciudad'];
		        $_SESSION['pais'] = $userFinal['pais'];
		        $_SESSION['codigoPostal'] = $userFinal['codigoPostal'];
		    }
           }
		}
	}
}

// if (!$_SESSION['logged_in'] = true) {
//   '?'>
//   <!--<a href="logout.php"><button>Debes loguearte</button></a>-->
//   <?php
//  exit();
// }

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
			<section class="container-fluid perfil">
				<div class="row">
					<div class="col-md-1"></div>
					<div class="col-md-2 "> 
						<h4 class="text-center">FOTO PERFIL</h4> 
						<img class="img-responsive" src= <?= $fotoPerfilUsuario ?>>
						<form action="" method="POST" enctype="multipart/form-data" accept="image/*">
							<input name="foto" type="file" />
							<button type="submit" class="btn btn-success" name="enviarFoto">Enviar</button>
							
						</form>
					</div>
					<div class="col-md-1"></div>
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
														<label class="form-control-label" for="input-nombre">Nombre</label>
														<p><?= $_SESSION['nombre']?></p>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group">
														<label class="form-control-label" for="input-email">Apellido </label>
														<p><?= $_SESSION['apellido']?></p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-6">
													<div class="form-group focused">
														<label class="form-control-label" for="input-first-name">Nombre</label>
														<p><?= $_SESSION['email']?></p>
													</div>
												</div>
												<div class="col-lg-6">
													<div class="form-group focused">
														<label class="form-control-label" for="input-last-name">Telefono</label>
														<p><?= $_SESSION['telefono']?></p>
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
														<p><?= $_SESSION['direccion']?></p>
													</div>
												</div>
											</div>
											<div class="row">
												<div class="col-lg-4">
													<div class="form-group focused">
														<label class="form-control-label" for="input-city">Ciudad</label>
														<p><?= $_SESSION['ciudad']?></p>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group focused">
														<label class="form-control-label" for="input-country">Pais</label>
														<p><?= $_SESSION['pais']?></p>
													</div>
												</div>
												<div class="col-lg-4">
													<div class="form-group">
														<label class="form-control-label" for="input-country">Codigo postal</label>
														<p><?= $_SESSION['codigoPostal']?></p>
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
			<?php require_once 'partials/footer.php' ?><!--Footer -->		
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>