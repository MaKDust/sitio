<?php
session_start();
require_once 'controladores/funciones.php';


//si esta logueado no puede entrar
if (isset($_SESSION['email'])) {
  ?>
  <a href="logout.php"><button>Desloguete</button></a>
  <?php
 exit();
}

  $arrayDeErrores = "";
 //ejecutamos la funcion validarRegistracion si hay post
  if ($_POST) {
    $arrayDeErrores = validarRegistracion($_POST);
    if ($arrayDeErrores){
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
      $jsonDeUsuario = json_encode($usuarioFinal);
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
            <form action= ""  method="post">
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
                <input type="password" name="password" id="password" class="form-control" placeholder="Contraseña" >
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
              <button class="btn btn-primary pull-right" name="">Registrarse</button>
            </form>
          </div>
          <div class="col-md-4"></div>
        </div>
      </section>
    </div>
    <?php require_once 'partials/footer.php' ?><!--Footer --> 
    <script
        src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
        integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
  </body>
</html>