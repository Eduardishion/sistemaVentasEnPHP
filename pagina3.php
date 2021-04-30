<?php 
//Inicio la sesión 
session_start(); 

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI") { 
   	//si no existe, envio a la página de autentificacion 
   	header("Location: entrada.php"); 
   	//ademas salgo de este script 
   	exit(); 


}elseif( $_SESSION["tipo"]=="RECEPCIONISTA"){
	header("Location: advertencia.php"); 
	exit(); 
}

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pagina 3</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/cuad.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<!--<script src="js/jquery-1.10.1.min.js"></script>-->
	<script src="js/validCampoFranz.js"></script>
	<script src="js/jquery.numeric.js"></script>
	<script src="js/funciones2.js"></script>


</head>
<body >
	
		<div class="container-fluid degradado">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
					<?php 
						print("puedes ingistrar un nuevo producto:" .$_SESSION["nombre"]."con sesion es:".$_SESSION["tipo"]);
					 ?>
				</div>
			</div> 
			
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" >
				<p>
					<h1>Registro de producto</h1>
				</p>
				<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right " onClick=" window.location.href='pagina9.php' ">Ver productos</button>
				<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right " onClick=" window.location.href='pagina7.php' ">Ver menú</button>
				</div>
				
			</div> 
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center" id="mensaje">
					
			</div><br /><br /><br />
			<div class="row">
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
					
				</div>
				<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 bordes sombra-form">
					<form method="post" action="php/cargar.php" id="formulario2" role="form"  >
						<br />
						<div class="form-group">
							<label for="codigo">Código</label>
							<input type="text" class="form-control" id="codigo" placeholder="Codigo de producto" name="codigo">
						</div>
						<div class="form-group">
							
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" id="nombre" placeholder="Nombre del producto" name="nombre">
						</div>
						
						<div class="form-group">
							
							<label for="clase">Clase</label>
							<input type="text" class="form-control" id="clase" placeholder="Clase de producto" name="clase">
						</div>
						
						<div class="form-group">
							<label for="marca">Marca</label>
							<input type="text" class="form-control" id="marca" placeholder="Marca de producto" name="marca">
						</div>
						<div class="form-group">
							<label for="precio">Precio unitario</label>
							<input type="text" class="form-control" id="precio" placeholder="Precio de producto" name="precio">
						</div>
						<div class="form-inline">
							<div class="form-group">
								<label for="registro">Fecha de registro</label>
								<input type="date" class="form-control" id="registro" name="registro">
							</div>
							<div class="form-group pull-right">
								<label for="caducidad">Fecha de caducidad</label>
								<input type="date" class="form-control" id="caducidad" name="caducidad">
							</div>	
						</div><br />
						<div class="form-group">
							<label for="">Descripción</label>
							<input type="text" class="form-control" id="descripcion" placeholder="Descripcion de producto" name="descripcion">
						</div>
						
						<div class="ultimo form-group pull-right">
							<img src="img/ajax.gif" class="hide"  id="imag" />
							<div class="msg hide" id="con"></div>
							<button type="submit" class="btn btn-primary" id="guardar">Guardar</button>
							<button type="reset" value="Reset" class="btn btn-primary " id="nuevo">Nuevo</button>
							<button type="button" class="btn btn-primary" onClick=" window.location.href='pagina7.php' " >Salir</button>
						</div>
						
					</form>
				</div>
				<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 " >
					
				</div>
			</div>
		</div>
	
	<footer>
		<div class="row">
				<img src="img/desk.jpg" class="img-responsive" alt="Image">
			</div>
	</footer>
</body>
</html>