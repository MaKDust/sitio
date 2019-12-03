<?php 

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
				    <ul class="nav navbar-nav navbar-right">
						<li><a href="login.php">Login</a></li>
					    <li><a href="registro.php">Registro</a></li>
					    <li><a href="contacto.php">Contacto</a></li>
					    <li><a href="preguntas.php">Preguntas Frecuentes</a></li>
					    <li><a href="perfil.php">Mi Perfil</a></li>
					    <li><a href="carrito.php"><i class="fas fa-shopping-basket p-2"></i></a></li>
					</ul>
				  </div>
				</nav>
			</header>
			
			
			<main>
			  <div class="container descripcionProducto">
			    <div class="row">
			     <div class="col-md-2"></div>
			      <div class="col-md-8">
			        <div class="card md-4">
			          <div class="card-header">
			            <nav class="header-navigation">
			               
			              <div class="btn-group">
			                <a href="#" class="btn btn-link btn-share" style="font-size: 15px">Comparte</a>
			              </div>
			            </nav>
			          </div>
			          <div class="card-body store-body">
			            <div class="product-info">
			              <div class="product-gallery">
			                
			                <div class="product-gallery-featured">
			                  <img src="https://via.placeholder.com/350x350/ffcf5b" alt="">
			                </div>
			              </div>
			              <div class="product-seller-recommended">
			               		                
			                
			                <div class="product-description md-5">
			                  <h4 class="mb-5">Caracteristicas</h4>
			                  <dl class="row mb-5">
			                    <dt class="col-sm-3">Marca</dt>
			                    <dd class="col-sm-9">Nickony</dd>
			                    <dt class="col-sm-3">Color</dt>
			                    <dd class="col-sm-9">Rojo</dd>
			                    <dt class="col-sm-3">Tamaño</dt>
			                    <dd class="col-sm-9">XXL</dd>
			                    <dt class="col-sm-3">Material</dt>
			                    <dd class="col-sm-9">Algodon</dd>
			                  </dl>
			                  <h4 class="md-5">Descripcion</h4>
			                  <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odit nemo reiciendis quisquam a quis delectus consectetur ipsa eligendi aliquam earum in vitae voluptate ratione fugiat similique nostrum debitis dolor, ipsam quo officiis quas
			                    necessitatibus? Magnam eveniet iure, eligendi est ullam consectetur repellat quis doloremque ad perspiciatis assumenda ducimus distinctio quaerat sit repudiandae illo praesentium modi dolor. Veritatis aperiam, minima natus assumenda
			                    ipsum voluptatem reprehenderit? Possimus nobis, voluptate, blanditiis, temporibus ad nostrum corrupti quos corporis voluptas tempora aliquid magnam quia voluptatem rerum odit fugiat facere necessitatibus adipisci sunt. Veritatis architecto,
			                    perferendis labore sit nobis eaque perspiciatis et iusto, in doloribus est!</p>
			                  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus vel reiciendis voluptatibus assumenda tempora vitae aut adipisci harum, corporis in id perferendis quia repellat reprehenderit temporibus aspernatur ab ullam magni error
			                    consectetur, facilis inventore ipsum, veniam voluptas. Error laboriosam atque quisquam facere esse repellat consectetur quos eum, quaerat blanditiis saepe?</p>
			                </div>
			                <div class="product-faq md-5">
			                  <h2 class="md-3">Preguntas y Respuestas</h2>
			                  <p class="text-muted">Que informacion necesita?</p>
			                  <div class="main-questions d-inline" data-container="body" data-toggle="popover" data-placement="right" data-content="Are you in doubt? these shortcuts can help you!">
			                    <a href="preguntas.php" class="btn btn-outline-primary">Costo de envio</a>
			                    <a href="preguntas.php" class="btn btn-outline-primary">Garantia</a>
			                    <a href="preguntas.php" class="btn btn-outline-primary">Formas de pago</a>
			                  </div>
			                </div>
			                <div class="product-comments">
			                  <h5 class="md-2">Preguntanos</h5>
			                  <form action="" class="form-inline md-5">
			                    <textarea name="" id="" cols="50" rows="2" class="form-control mr-4" placeholder="Escribe tu pregunta"></textarea><button class="btn btn-lg btn-primary">Consulta!</button>
			                  </form>
			                  <h5 class="md-5">Ultimas Preguntas</h5>
			                  <ol class="list-unstyled last-questions-list">
			                    <li><i class="fa fa-comment"></i> <span>Hola, puedo pagar con tarjeta?</span></li>
			                    <li><i class="fa fa-comment"></i> <span>Puedo enviarlo a otra direccion?</span></li>
			                  </ol>
			                </div>
			              </div>
			            </div>
			            <div class="product-payment-details">
			              <p class="last-sold text-muted"><small>145 ventas</small></p>
			              <h4 class="product-title md-2">Remera Nickony - XXL Blanca y Negra - 100% Algodon - Edicion Limitada</h4>
			              <h3 class="product-price display-4">$ 25.00</h3>
			              <p class="text-success"><i class="fa fa-credit-card"></i> 18x $ 1.40 or 5x $ 5.00</p>
			              <p class="mb-0"><i class="fa fa-truck"></i> Enviamos a todo el pais</p>
			              
			              <label for="quant">Cantidad</label>
			              <input type="number" name="quantity" min="1" id="quant" class="form-control mb-5 input-lg" placeholder="Elija cantidad">
			              <a href="carrito.php"><button class="btn btn-primary btn-lg btn-block">Comprar</button></a>
			             
			              
			            </div>
			          </div>
			        </div>
			      </div>
			    </div>
			  </div>
			</main>


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