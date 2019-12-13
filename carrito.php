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
    	<!--FONTAWOSON-->
    	<script src="https://kit.fontawesome.com/3b98d2cca3.js" crossorigin="anonymous"></script>
	</head>
	<body>
		
		<?php require_once 'partials/header.php' ?>
			
<div class="container-fluid carrito">
	<div class="row">
		<div class="col-md-2"></div>
		<div class="col-md-8">
			<div class="panel panel-info">
				<div class="panel-heading">
					<div class="panel-title">
						<div class="row">
							<div class="col-md-6">
								<h5><span class="glyphicon glyphicon-shopping-cart"></span> Carrito</h5>
							</div>
							<div class="col-md-6">
								<button type="button" class="btn btn-primary btn-sm btn-block">
									<span class="glyphicon glyphicon-share-alt"></span> Continua comprando
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-md-2">
							<a href="descripcionProducto.php"><img class="img-responsive" src="http://placehold.it/100x70"></a>
						</div>
						<div class="col-md-4">
							<a href="descripcionProducto.php"><h4 class="product-name"><strong>Producto 1</strong></h4></a>
							<h4><small>Descripcion</small></h4>
						</div>
						<div class="col-md-6">
							<div class="col-xs-6 text-right">
								<h6 class="pull-left"><strong>25.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="col-md-2">
							<a href="descripcionProducto.php"><img class="img-responsive" src="http://placehold.it/100x70"></a>
							
						</div>
						<div class="col-md-4">
							<a href="descripcionProducto.php"><h4 class="product-name"><strong>Producto 2</strong></h4></a>
							<h4><small>Descripcion</small></h4>
						</div>
						<div class="col-md-6">
							<div class="col-xs-6 text-right">
								<h6 class="pull-left"><strong>35.00 <span class="text-muted">x</span></strong></h6>
							</div>
							<div class="col-md-4">
								<input type="text" class="form-control input-sm" value="1">
							</div>
							<div class="col-md-2">
								<button type="button" class="btn btn-link btn-xs">
									<span class="glyphicon glyphicon-trash"> </span>
								</button>
							</div>
						</div>
					</div>
					<hr>
					<div class="row">
						<div class="text-center">
							<div class="col-md-9">
								<h6  class="text-left">Actualizar cantidad</h6>
							</div>
							<div class="col-md-3">
								<button type="button" class="btn btn-default btn-sm btn-block">
									Actualizar
								</button>
							</div>
						</div>
					</div>
				</div>
				<div class="panel-footer">
					<div class="row text-center">
						<div class="col-md-9">
							<h4 class="text-right">Total <strong>$60.00</strong></h4>
						</div>
						<div class="col-md-3">
							<button type="button" class="btn btn-success btn-block">
								Finalizar Compra
							</button>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="col-md-2"></div>
	</div>
</div>
			
<?php require_once 'partials/footer.php' ?><!--Footer -->	





		</div>
		

		

		<script
			  src="https://code.jquery.com/jquery-3.4.1.slim.min.js"
			  integrity="sha256-pasqAKBDmFT4eHoN2ndd6lN370kFiGUFyTiUHWhU7k8="
			  crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
	</body>
</html>