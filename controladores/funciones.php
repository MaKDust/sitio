<?php 

function pre($algo){
  echo "<pre>";
  var_dump($algo);
  echo "</pre>";
}

function validarRegistracion($unArray){
  
  $errores = []; //evaluamos los errores primero.
  
    //validar campo "nombre"
    if(isset($unArray['nombre'])) {
      if(empty($unArray['nombre'])) {
          $errores['nombre'] = "Este campo esta vacio.";   
      }
      elseif(strlen($unArray['nombre']) < 2) {
          $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres."; 
      }
    }
    
    //validar campo "apellido"
    if(isset($unArray['apellido'])) {
      if(empty($unArray['apellido'])) {
          $errores['apellido'] = "Este campo debe completarse.";   
      }
      elseif(strlen($unArray['apellido']) < 2) {
          $errores['apellido'] = "Tu apellido debe tener al menos 2 caracteres."; 
      }
    }
    
    //validar campo "email"
    if(isset($unArray['email'])) {
      if(empty($unArray['email'])) {
          $errores['email'] = "Este campo debe completarse.";   
      }
      elseif(!filter_var($unArray['email'], FILTER_VALIDATE_EMAIL)) {
          $errores['email'] = "Debes ingresar un email valido."; 
      }
      elseif ($_POST) {
          $arrayUsuarios = abrirBBDD('usuarios.json');
          foreach ($arrayUsuarios as $usuarioJson) {
            $userFinal = json_decode($usuarioJson, true);
            if ($_POST['email'] == $userFinal['email']){
              $errores['email'] = "Este Email ya tiene una cuenta registrada.";
            }
      }
    }
  }
    
    //validar campo "telefono"
    if(isset($unArray['telefono'])) {
      if(empty($unArray['telefono'])) {
          $errores['telefono'] = "Este campo debe completarse.";   
      }
      elseif(!filter_var($unArray['telefono'], FILTER_SANITIZE_NUMBER_INT)) {
          $errores['telefono'] = "Debes ingresar numeros."; 
      }
    }
    
    //validar campo "direccion"
    if(isset($unArray['direccion'])) {
      if(empty($unArray['direccion'])) {
          $errores['direccion'] = "Este campo debe completarse.";   
      }
      elseif(strlen($unArray['direccion']) < 2) {
          $errores['direccion'] = "Tu direccion debe tener al menos 2 caracteres."; 
      }
    }
    
    //validar campo "ciudad"
    if(isset($unArray['ciudad'])) {
      if(empty($unArray['ciudad'])) {
          $errores['ciudad'] = "Este campo debe completarse.";   
      }
      elseif(strlen($unArray['ciudad']) < 2) {
          $errores['ciudad'] = "Tu ciudad debe tener al menos 2 caracteres."; 
      }
    }
    
    //validar campo "pais"
    if(isset($unArray['pais'])) {
      if(empty($unArray['pais'])) {
          $errores['pais'] = "Este campo debe completarse.";   
      }
      elseif(strlen($unArray['pais']) < 2) {
          $errores['pais'] = "Tu pais debe tener al menos 2 caracteres."; 
      }
    }
    
    //validar campo "codigoPostal"
    if(isset($unArray['codigoPostal'])) {
      if(empty($unArray['codigoPostal'])) {
          $errores['codigoPostal'] = "Este campo debe completarse.";   
      }
      elseif(strlen($unArray['codigoPostal']) < 2) {
          $errores['codigoPostal'] = "Tu codigo postal debe tener al menos 2 caracteres."; 
      }
    }
    
    //validar campo "password"
    if(isset($unArray['password'])) {
      if(empty($unArray['password'])) {
          $errores['password'] = "Este campo debe completarse.";   
      }
      elseif(strlen($unArray['password']) < 6) {
          $errores['password'] = "Tu contraseña debe tener al menos 6 caracteres."; 
      }
    }
    
    //validar campo "repassword"
    if(isset($unArray['repassword'])) {
      if(empty($unArray['repassword'])) {
          $errores['repassword'] = "Este campo debe completarse.";   
      }
      elseif($unArray['password'] != $_POST['repassword']) {
          $errores['repassword'] = "Tu contraseña no coinciden"; 
      }
    }
    
    
    if (count($errores) === 0 ) {
      return true;
    }else{
      return $errores;
    }
  }

function persistirDato($arrayE, $campo) {
    if(isset($arrayE[$campo]) ) {
        return "";
    } else {
        if(isset($_POST[$campo])) {
            return $_POST[$campo];
        }
    }
}

function abrirBBDD($unArchivo) {
  //obtengo del archivo usuarios.json su contenido y lo guardo en $usuariosGuardados
    $usuariosGuardados = file_get_contents($unArchivo);
    //separo los string del json con un explode indicando que el sparador es PHP_EOL creando un array
    $explodeDeUsuarios = explode(PHP_EOL, $usuariosGuardados);
    //como me crea un array vacio al final lo quito con un pop
    array_pop($explodeDeUsuarios);
    return $explodeDeUsuarios;
}

if(isset($_SESSION['email'])) {
  $nombre_fichero = '/xampp/htdocs/fullstack/Sitio/img/'.$_SESSION['telefono'].'.jpg';
  $fotoPerfilUsuario="";
  if (file_exists($nombre_fichero)) {
    $fotoPerfilUsuario= 'img/'.$_SESSION['telefono'].'.jpg';
  } else {
    $fotoPerfilUsuario="img/fotoPerfil.jpg";
    }
}


 ?>