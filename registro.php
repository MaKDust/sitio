<? php
session_start ();
require_once  ' controladores / funciones.php ' ;
if ( isset ( $ _SESSION [ ' correo electrónico ' ])) {
  ? >
  < Un  href = " logout.php " > < botón > Desloguete </ botón > </ una >
  <? php
 salida ();
}
  $ arrayDeErrores  =  " " ;
  if ( $ _POST ) {
    $ arrayDeErrores  = validarRegistracion ( $ _POST );
    if ( $ arrayDeErrores ) {
      $ usuarioFinal  = [
          ' nombre '  =>  trim ( $ _POST [ ' nombre ' ]),
          ' apellido '  =>  trim ( $ _POST [ ' apellido ' ]),
          ' email '  =>  $ _POST [ ' email ' ],
          ' telefono '  =>  trim ( $ _POST [ ' telefono ' ]),
          ' direccion '  =>  trim ( $ _POST [ ' direccion ' ]),
          ' ciudad '  =>  trim ( $ _POST [ ' ciudad ' ]),
          ' pais '  =>  trim ( $ _POST [ ' pais ' ]),
          ' codigoPostal '  =>  trim ( $ _POST [ ' codigoPostal ' ]),
          ' password '  =>  password_hash ( $ _POST [ ' contraseña ' ], PASSWORD_DEFAULT )

      ];
      $ jsonDeUsuario  =  json_encode ( $ usuarioFinal );
      file_put_contents ( ' usuarios.json ' , $ jsonDeUsuario  .  PHP_EOL , FILE_APPEND );
    }
  }
? >

<! DOCTYPE html>
< html  lang = " en " >
  < cabeza >
    < meta  charset = " UTF-8 " >
    < título > Documento </ título >
    < Enlace  rel = " hoja de estilo "  href = " https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css "  integridad = " SHA384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va + PmSTsz / K68vbdEjh4u "  crossorigin = " anónimo " >
    <! - CSS ->
      < link  rel = " stylesheet "  href = " css / styles.css " >

      <! - FONTAWOSON ->
      < script  src = " https://kit.fontawesome.com/3b98d2cca3.js "  crossorigin = " anónimo " > </ script >
  </ cabeza >
  < cuerpo >
    < div >
      <? php require_once ' partials / header.php ' ? >
      < section  class = " contenedor-fluido registro " >
        < div  class = " row " >
          < div  class = " col-md-4 " > </ div >
          < div  class = " col-md-4 " >
            < form  action = " "   method = " post " >
              < h4 > Registro de Usuario: </ h4 >
              < div  class = " form-group " >
                < label  for = " nombre " > Nombre </ label >
                < entrada
                tipo = " texto "
                nombre = " nombre "
                id = " nombre "
                clase = " control de formulario "
                marcador de posición = " Nombre "
                value = " <? = persistirDato ( $ arrayDeErrores , ' nombre ' ) ? > "
                >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' nombre ' ])? $ arrayDeErrores [ ' nombre ' ]: " " ? >
                </ pequeño >
              </ div >
              < div  class = " form-group " >
                < label  for = " apellido " > Apellido </ label >
                < entrada
                tipo = " texto "
                nombre = " apellido "
                id = " apellido "
                clase = " control de formulario "
                marcador de posición = " Apellido "
                value = " <? = persistirDato ( $ arrayDeErrores , ' apellido ' ) ? > "
                >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' apellido ' ])? $ arrayDeErrores [ ' apellido ' ]: " " ? >
                </ pequeño >
              </ div >
              < div  class = " form-group " >
                < label  for = " email " > Correo electrónico </ label >
                < entrada
                tipo = " texto "
                nombre = " correo electrónico "
                id = " correo electrónico "
                clase = " control de formulario "
                marcador de posición = " Correo electrónico "
                value = " <? = persistirDato ( $ arrayDeErrores , ' email ' ) ? > "
                >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' correo electrónico ' ])? $ arrayDeErrores [ ' correo electrónico ' ]: " " ? >
                </ pequeño >
              </ div >
              < div  class = " form-group " >
                < label  for = " telefono " > Teléfono </ label >
                < entrada
                tipo = " texto "
                nombre = " telefono "
                id = " telefono "
                clase = " control de formulario "
                marcador de posición = " Teléfono "
                value = " <? = persistirDato ( $ arrayDeErrores , ' telefono ' ) ? > "
                >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' telefono ' ])? $ arrayDeErrores [ ' telefono ' ]: " " ? >
                </ pequeño >
              </ div >
              < div  class = " form-group " >
                < label  for = " direccion " > Direccion </ label >
                < entrada
                tipo = " texto "
                nombre = " direccion "
                id = " direccion "
                clase = " control de formulario "
                marcador de posición = " Dirección "
                value = " <? = persistirDato ( $ arrayDeErrores , ' direccion ' ) ? > "
                >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' direccion ' ])? $ arrayDeErrores [ ' direccion ' ]: " " ? >
                </ pequeño >
              </ div >
              < div  class = " form-group " >
                < label  for = " ciudad " > Ciudad </ label >
                < entrada
                tipo = " texto "
                nombre = " ciudad "
                id = " ciudad "
                clase = " control de formulario "
                placeholder = " Ciudad "
                value = " <? = persistirDato ( $ arrayDeErrores , ' ciudad ' ) ? > "
                >
              </ div >
              < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' ciudad ' ])? $ arrayDeErrores [ ' ciudad ' ]: " " ? >
                </ pequeño >
              < div  class = " form-group " >
                < label  for = " pais " > Pais </ label >
                < entrada
                tipo = " texto "
                nombre = " pais "
                id = " pais "
                clase = " control de formulario "
                placeholder = " Pais "
                value = " <? = persistirDato ( $ arrayDeErrores , ' pais ' ) ? > "
                >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' pais ' ])? $ arrayDeErrores [ ' pais ' ]: " " ? >
                </ pequeño >
              </ div >
              < div  class = " form-group " >
                < label  for = " codigoPostal " > Codigo Postal </ label >
                < entrada
                tipo = " texto "
                nombre = " codigoPostal "
                id = " codigoPostal "
                clase = " control de formulario "
                marcador de posición = " Codigo Postal "
                value = " <? = persistirDato ( $ arrayDeErrores , ' codigoPostal ' ) ? > "
                >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' codigoPostal ' ])? $ arrayDeErrores [ ' codigoPostal ' ]: " " ? >
                </ pequeño >
              </ div >
              < div  class = " form-group " >
                < label  for = " password " > Contraseña </ label >
                < input  type = " password "  name = " password "  id = " password "  class = " form-control "  placeholder = " Contraseña " >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' contraseña ' ])? $ arrayDeErrores [ ' contraseña ' ]: " " ? >
                </ pequeño >
              </ div >
              < div  class = " form-group " >
                < label  for = " repassword " > Repetir Contraseña </ label >
                < input  type = " password "  name = " repassword "  id = " repassword "  class = " form-control "  placeholder = " Repetir Contraseña " >
                < small  class = " text-danger pull-right " >
                  <? = isset ( $ arrayDeErrores [ ' repassword ' ])? $ arrayDeErrores [ ' contraseña ' ]: " " ? >
                </ pequeño >
              </ div >
              < button  class = " btn btn-primary pull-right "  name = " " > Registrarse </ button >
            </ form >
          </ div >
          < div  class = " col-md-4 " > </ div >
        </ div >
      </ sección >
    </ div >
    <? php require_once ' partials / footer.php ' ? > <! - Pie de página ->
    < guión
        src = " https://code.jquery.com/jquery-3.4.1.slim.min.js "
        integridad = " sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8 = "
        crossorigin = " anónimo " > </ script >
    < Guión  src = " https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "  integridad = " sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa "  crossorigin = " Anónimo " > </ script de >
  </ cuerpo >
</ html >
