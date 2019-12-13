<?php  
require_once 'controladores/funciones.php';
?>
<div class="container-fluid footer"><!-- Footer -->
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
				    	<?php if(isset($_SESSION['email'])): ?>
		                <li><a href="contacto.php">Contacto</a></li>
		                <li><a href="preguntas.php">Preguntas Frecuentes</a></li>
		                <li><a href="logout.php">Log out</a></li>
		                              
		           		 <?php endif; ?>
		            </ul>
		            <ul class="m-0 p-0">
		                <?php if(!isset($_SESSION['email'])): ?>
		                <li><a href="contacto.php">Contacto</a></li>
		                <li><a href="preguntas.php">Preguntas Frecuentes</a></li>
		                <li><a href="login.php">Login</a></li>
		                <li><a href="registro.php">Registro</a></li>
		                <?php endif; ?>
				    </ul>
				</div>
				<div class="col-lg-4 col-xs-12 location">
					<h4 class="mt-lg-0 mt-sm-4">Contactos</h4>
				    <p><i class="fas fa-home"></i></i>  Calle Falsa Sin Numero</p>
				    <p class="mb-0"><i class="fa fa-phone p-3"></i>  (381) 555-5555</p>
				    <p><i class="fa fa-envelope-o mr-3"></i>  info@sitio.com</p>
				</div>
			</div>
		</div>