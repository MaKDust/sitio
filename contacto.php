<?php  
session_start();
require_once 'controladores/funciones.php';
?>


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
	<?php require_once 'partials/header.php' ?>
	<div class="conteiner-fluid contacto">
    <div class="row">
    <!--Grid column-->
      <div class="col-md-2"></div>
        <div class="col-md-4">
          <!--Form with header-->
          <form method="post" action="enviar_email.php">
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
                <label for="nombre">Nombre</label>
                <input type="text" id="nombre" name="nombre" class="form-control">
              </div>
              <div class="md-form">
                <i class="fas fa-envelope prefix grey-text"></i>
                <label for="email">Email</label>
                <input type="email" id="email" name="email"  class="form-control">
              </div>
              <div class="md-form">
                <i class="fas fa-tag prefix grey-text"></i>
                <label for="asunto">Asunto</label>
                <input type="text" id="asunto" name="asunto" class="form-control">
              </div>
              <div class="md-form">
                <i class="fas fa-pencil-alt prefix grey-text"></i>
                 <label for="comentario">Comentario</label>
                <textarea id="comentario" name="comentario" class="form-control md-textarea" rows="3"></textarea>
              </div>
              <div class="text-center mt-4">
                <button class="btn btn-primary" name="enviar" type="submit" value="Enviar" >Enviar</button>
              </div>
            </div>
          </form>
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
  <?php require_once 'partials/footer.php' ?><!--Footer -->	

		<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8=" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>