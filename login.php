<?php 

session_start();

require_once 'controladores/funciones.php';

$arrayDeErrores = "";
$msg="";

if($_POST) {
	$arrayDeErrores = validarRegistracion($_POST);
    if($arrayDeErrores) {
	    $arrayUsuarios = abrirBBDD('usuarios.json');
	    foreach ($arrayUsuarios as $usuarioJson) {
	      $userFinal = json_decode($usuarioJson, true);
	       if ($_POST['email'] == $userFinal['email']) {
	       	if (password_verify($_POST['password'], $userFinal['password'])) {
	        	$_SESSION['nombre'] = $userFinal['nombre'];
	        	$_SESSION['apellido']  = $userFinal['apellido'];
		        $_SESSION['email'] = $userFinal['email'];
		        $_SESSION['telefono'] = $userFinal['telefono'];
		        $_SESSION['direccion'] = $userFinal['direccion'];
		        $_SESSION['ciudad'] = $userFinal['ciudad'];
		        $_SESSION['pais'] = $userFinal['pais'];
		        $_SESSION['codigoPostal'] = $userFinal['codigoPostal'];
		        $_SESSION['password'] = $userFinal['password'];
		        
		        $_SESSION['logged_in'] = true;	
		       	if(isset($_POST['recordarme']) && $_POST['recordarme'] == "on") {
		        	setcookie('userEmail', $userFinal['email'], time() + 60 * 60 * 24 * 7);
		            setcookie('userPass', $userFinal['password'], time() + 60 * 60 * 24 * 7);
		            setcookie('telefono', $userFinal['telefono'], time() + 60 * 60 * 24 * 7);
		        }
	        header('Location: perfil.php');
	        }else{
	        	$msg= "usuario incorrecto";
	         	break;
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
								 <?= isset($arrayDeErrores['password'])?$arrayDeErrores['password']:$msg?>
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
							<button type="submit" name="submitLogin" class="btn btn-primary pull-right">Ingresar</button>
						</form>
					</div>
					<div class="col-md-4"></div>
				</div>
			</section>
			<?php require_once 'partials/footer.php' ?><!--Footer -->		
		</div>
		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
	
</html>