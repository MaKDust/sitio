<? php 
session_start ();
require_once  ' controladores / funciones.php ' ;
$ arrayDeErrores  =  " " ;
$ msg = " " ;
if ( $ _POST ) {
	$ arrayDeErrores  = validarRegistracion ( $ _POST );
    if ( $ arrayDeErrores ) {
	    $ arrayUsuarios  = abrirBBDD ( ' usuarios.json ' );
	    foreach ( $ arrayUsuarios  como  $ usuarioJson ) {
	      $ userFinal  =  json_decode ( $ usuarioJson , verdadero );
	       if ( $ _POST [ ' email ' ] ==  $ userFinal [ ' email ' ]) {
	       	if ( password_verify ( $ _POST [ ' contraseña ' ], $ userFinal [ ' contraseña ' ])) {
	        	$ _SESSION [ ' nombre ' ] =  $ userFinal [ ' nombre ' ];
	        	$ _SESSION [ ' apellido ' ]   =  $ userFinal [ ' apellido ' ];
		        $ _SESSION [ ' email ' ] =  $ userFinal [ ' email ' ];
		        $ _SESSION [ ' telefono ' ] =  $ userFinal [ ' telefono ' ];
		        $ _SESSION [ ' direccion ' ] =  $ userFinal [ ' direccion ' ];
		        $ _SESSION [ ' ciudad ' ] =  $ userFinal [ ' ciudad ' ];
		        $ _SESSION [ ' pais ' ] =  $ userFinal [ ' pais ' ];
		        $ _SESSION [ ' codigoPostal ' ] =  $ userFinal [ ' codigoPostal ' ];
		        $ _SESSION [ ' contraseña ' ] =  $ userFinal [ ' contraseña ' ];
       			$ _SESSION [ ' login_in ' ] =  verdadero ;
		       	if ( isset ( $ _POST [ ' recordarme ' ]) &&  $ _POST [ ' recordarme ' ] ==  " on " ) {
		        	setcookie ( ' userEmail ' , $ userFinal [ ' email ' ], time () +  60  *  60  *  24  *  7 );
		            setcookie ( ' userPass ' , $ userFinal [ ' contraseña ' ], time () +  60  *  60  *  24  *  7 );
		            setcookie ( ' telefono ' , $ userFinal [ ' telefono ' ], time () +  60  *  60  *  24  *  7 );
		        }
	        header ( ' Ubicación: perfil.php ' );
	        } más {
	        	$ msg =  " usuario incorrecto " ;
	         	romper ;
	         }
       		}
    	}
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
			< encabezado >
				< nav  class = " navbar navbar-default " >
				  < div  class = " container " >
				    < div  class = " navbar-header " >
				      < button  type = " button "  class = " navbar-toggle colapsada "  data-toggle = " collapse "  data-target = " # bs-example-navbar-collapse-1 "  aria-expansion = " false " >
				        < span  class = " sr-only " > Alternar navegación </ span >
				        < span  class = " icon-bar " > </ span >
				        < span  class = " icon-bar " > </ span >
				        < span  class = " icon-bar " > </ span >
				      </ button >
				      < Una  clase = " barra de navegación de la marca "  href = " index.php " > Sitio </ a >
				    </ div >
				  </ div >
				</ nav >
			</ header >
			< section  class = " inicio de sesión de contenedor-fluido " >
				< div  class = " row " >
					< div  class = " col-md-4 " > </ div >
					< div  class = " col-md-4 " >
						< form  id = ' '  action = ' '  method = ' post ' >
							< h4 > Inicio de Sesion </ h4 >
							< div  class = " form-group " >
								< label  for = " email " > Correo electrónico </ label >
								< entrada
								tipo = " correo electrónico "
								nombre = ' correo electrónico '
								id = ' correo electrónico '
								clase = " control de formulario "
								marcador de posición = " Correo electrónico "
								value = " <? = persistirDato ( $ arrayDeErrores , ' email ' ) ? > "
								>
								 < small  class = " text-danger " >
								  <? = isset ( $ arrayDeErrores [ ' correo electrónico ' ])? $ arrayDeErrores [ ' correo electrónico ' ]: " " ? >
								 </ pequeño >
							</ div >
							< div  class = " form-group " >
								< label  for = " password " > Contraseña </ label >
								< entrada
								tipo = " contraseña "
								nombre = ' contraseña '
								id = ' contraseña '
								clase = " control de formulario "
								marcador de posición = " Contraseña "
								>
								< small  class = " text-danger " >
								 <? = isset ( $ arrayDeErrores [ ' contraseña ' ])? $ arrayDeErrores [ ' contraseña ' ]: $ msg ? >
								</ pequeño >
							</ div >
							< div  class = " form-group " >
            					< div  class = " form-check " >
                					< entrada
                					clase = " entrada-verificación-formulario "
                					type = " casilla de verificación "
                					id = " recordarme "
                					nombre = " recordarme "
                					>
                					< label  class = " form-check-label "  for = " gridCheck " > Grabar como usuario </ label >
            					</ div >
       						 </ div >
							< button  type = " reset "  class = " btn btn-danger " > Cancelar </ button >
							< button  type = " submit "  name = " submitLogin "  class = " btn btn-primary pull-right " > Ingresar </ button >
						</ form >
					</ div >
					< div  class = " col-md-4 " > </ div >
				</ div >
			</ sección >
			<? php require_once ' partials / footer.php ' ? > <! - Pie de página ->

		< script  src = " https://code.jquery.com/jquery-3.4.1.slim.min.js "  integridad = " sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8 = "  crossorigin = " anónimo " > </ script >
		< Guión  src = " https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js "  integridad = " sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa "  crossorigin = " Anónimo " > </ script de >
	</ cuerpo >
</ html >
