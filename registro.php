<?php

require_once 'controladores/funciones.php';

$arrayDeErrores = "";

 //ejecutamos la funcion validarRegistracion si hay post
if ($_POST) {
  $arrayDeErrores = validarRegistracion($_POST);
  if ($arrayDeErrores){
   
    //registro usuario en un array "usuarioFinal"
    $usuarioFinal = [
        'nombre' => trim($_POST['nombre']),
        'apellido' => trim($_POST['apellido']),
        'email' => $_POST['email'],
        'telefono' => trim($_POST['telefono']),
        'direccion' => trim($_POST['direccion']),
        'ciudad' => trim($_POST['ciudad']),
        'pais' => trim($_POST['pais']),
        'codigoPostal' => trim($_POST['codigoPostal']),
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ];
    //Envio a la base de datos $usuarioFinal
    //transformo en json el array $usuarioFinal y lo guardo en la variable $jsonDeUsuario
    $jsonDeUsuario = json_encode($usuarioFinal);
    //poner el contenido de $jsonDeUsuario en el archivo usuarios.json con FILE_APPEND para que no me pise los registros y me sume a lo que ya estaba antes y concateno . PHP_EOL para que guarde uno por linea End Of Line
    file_put_contents('usuarios.json', $jsonDeUsuario . PHP_EOL, FILE_APPEND);
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
       <?php require_once 'partials/header.php' ?>
      
      <section class="container-fluid registro">
        <div class="row">
          <div class="col-md-4"></div>
          <div class="col-md-4">
            <form action="index.php" method="post">
              <h4>Registro de Usuario:</h4>
              <div class="form-group">
                <label for="nombre">Nombre</label>
                <input 
                type="text" 
                name="nombre" 
                id="nombre" 
                class="form-control" 
                placeholder="Nombre" 
                value="<?= persistirDato($arrayDeErrores, 'nombre') ?>"
                >
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['nombre']) ? $arrayDeErrores['nombre'] : "" ?>
                </small>
              </div>
              <div class="form-group">
                <label for="apellido">Apellido</label>
                <input 
                type="text" 
                name="apellido" 
                id="apellido" 
                class="form-control" 
                placeholder="Apellido"
                value="<?= persistirDato($arrayDeErrores, 'apellido') ?>"
                >
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['apellido']) ? $arrayDeErrores['apellido'] : "" ?>
                </small>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input 
                type="text" 
                name="email" 
                id="email" 
                class="form-control" 
                placeholder="Email"
                value="<?= persistirDato($arrayDeErrores, 'email') ?>"
                >
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['email']) ? $arrayDeErrores['email'] : "" ?>
                </small>
              </div>
              <div class="form-group">
                <label for="telefono">Teléfono</label>
                <input 
                type="text" 
                name="telefono" 
                id="telefono" 
                class="form-control" 
                placeholder="Teléfono"
                value="<?= persistirDato($arrayDeErrores, 'telefono') ?>"
                >
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['telefono']) ? $arrayDeErrores['telefono'] : "" ?>
                </small>
              </div>
              <div class="form-group">
                <label for="direccion">Direccion</label>
                <input 
                type="text" 
                name="direccion" 
                id="direccion"
                class="form-control" 
                placeholder="Direccion"
                value="<?= persistirDato($arrayDeErrores, 'direccion') ?>"
                >
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['direccion']) ? $arrayDeErrores['direccion'] : "" ?>
                </small>
              </div>
              <div class="form-group">
                <label for="ciudad">Ciudad</label>
                <input 
                type="text" 
                name="ciudad" 
                id="ciudad"
                class="form-control" 
                placeholder="Ciudad"
                value="<?= persistirDato($arrayDeErrores, 'ciudad') ?>"
                >
              </div>
              <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['ciudad']) ? $arrayDeErrores['ciudad'] : "" ?>
                </small>
              <div class="form-group">
                <label for="pais">Pais</label>
                <input 
                type="text" 
                name="pais" 
                id="pais" 
                class="form-control" 
                placeholder="Pais"
                value="<?= persistirDato($arrayDeErrores, 'pais') ?>"
                >
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['pais']) ? $arrayDeErrores['pais'] : "" ?>
                </small>
              </div>
              <div class="form-group">
                <label for="codigoPostal">Codigo Postal</label>
                <input 
                type="text" 
                name="codigoPostal" 
                id="codigoPostal" 
                class="form-control" 
                placeholder="Codigo Postal"
                value="<?= persistirDato($arrayDeErrores, 'codigoPostal') ?>"
                >
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['codigoPostal']) ? $arrayDeErrores['codigoPostal'] : "" ?>
                </small>
              </div>
              <div class="form-group">
                <label for="password">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña">
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['password']) ? $arrayDeErrores['password'] : "" ?>
                </small>
              </div>
              <div class="form-group">
                <label for="repassword">Repetir Contraseña</label>
                <input type="password" name="repassword" id="repassword" class="form-control" placeholder="Repetir Contraseña">
                <small class="text-danger pull-right">
                  <?= isset($arrayDeErrores['repassword']) ? $arrayDeErrores['repassword'] : "" ?>
                </small>
              </div>
              <button type="submit" name="Submit" class="btn btn-primary pull-right">Registrarse</button>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
      </section>
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
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>