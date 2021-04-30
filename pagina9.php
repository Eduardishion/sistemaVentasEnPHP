<?php //Inicio la sesión 
session_start(); 
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI") { 
    //si no existe, envio a la página de autentificacion 
    header("Location: entrada.php"); 
    
    //ademas salgo de este script 
    exit(); 
}
?>
<!doctype html>
<!--etique del idioma que se utilizara-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<!--<meta content="5;URL=pagina8.php" http-equiv="REFRESH"> </meta>-->
	<meta content="900" http-equiv="REFRESH"> </meta>
	<title>Pagina 9</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/cuad.css">
	<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<!--<script src="js/jquery-1.10.1.min.js"></script>-->
	<script src="js/validCampoFranz.js"></script>
	<script src="js/funciones5.js"></script>
	
	
	<!--<script src="js/validCampoFranz.js"></script>-->
</head>
<body >
	<div class="container-fluid degradado">
		<div class="row">
			<br />
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            		<?php 
						echo '<p class="alert alert-info ">'.'Elige una opcion : '.$_SESSION["nombre"].'</p>';				   
					?>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center">
					<h1>Vista de productos registrados</h1>
					<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right center-block" onClick=" window.location.href='pagina7.php' ">Ver menú</button>
					<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right center-block" onClick=" window.location.href='pagina3.php' ">Registra producto</button>


				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center" >
					

					<a href="php/salida.php" class="alert alert-danger" >Cerrar sesión</a>
				</div>
		</div>

		<div id="pestañas">
			<ul >
				    <li><a href="#Primera-1">Mostrar productos</a></li>
				    <li><a href="#Segunda-2">Actualizar productos</a></li>
				    <li><a href="#Tercera-3">Eliminar productos</a></li>
		    </ul>
		    <div id="Primera-1">

		    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style=" height:500px;overflow:scroll;" >
							
							<table class="table table-hover table-striped table-condensed"  >
								<thead>
									<tr class="success">
										<th>Id producto</th>
							            <th>Código</th>
							            <th>Nombre</th>
							            <th>Clase</th>
							            <th>Marca</th>
							            <th>Precio unitario</th>
							            <th>Fecha de registro</th>
							            <th>fecha de caducidad</th>
							            <th>Descripción</th>
							            
									</tr>
								</thead>
								<tbody>
									<tr>

										<?php
											include ("php/mostrar_productos.php");
										?>
									</tr>
								</tbody>
							</table>
						</div>
		    	
		    </div>
		    <div id="Segunda-2">
		    	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		    		
		    	</div>
		    	<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 bordes sombra-form">
		    		<form method="post" action"php/cargar.php" id="formulario2" role="form" >
		    			<br />
		    			<legend><h1>Modifica los datos de producto </h1><small>Es indispensable ingresar el identificador</small></legend>
						<div class="form-group">
							<label for="id_producto">Id producto</label>
							<input type="text" class="form-control" id="id_producto" placeholder="Codigo de producto" name="id_producto">
						</div>

						<div class="form-group">
							<label for="codigo">Código</label>
							<input type="text" class="form-control" id="codigo" placeholder="Codigo de producto" name="codigo">
						</div>
						<div class="form-group">
							<label for="nombre">Nombre</label>
							<input type="text" class="form-control" id="nombre" placeholder="Codigo de producto" name="nombre">
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
							<button type="submit" class="btn btn-primary" id="actualizar">Actualizar</button>
							<button type="reset" value="Reset" class="btn btn-primary " id="nuevo">Otro</button>
							<button type="button" class="btn btn-primary" onClick=" window.location.href='pagina7.php' " >Salir</button>
						</div>
						
					</form>
		    	</div>
		    	<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
		    		
		    	</div>
		    	
		    </div>
		    <div id="Tercera-3">
		    	<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
		    		<form method="post" action"php/elimnar_per.php" role="form-horizontal">
								<legend><h1>Eliminación de producto</h1><small>Es indispensable el id para eliminar una persona</small></legend>
										<div class="form-group">
											<label for="id_pro">Id_producto</label>
											<input type="text" class="form-control" id="id_pro" placeholder="ingresa tu id" name="id_pro">
										</div>
										
										<div class="ultimo">
											<img src="img/ajax.gif" class="hide"  id="imag" />
											<div class="msg hide" id="con"></div>
											<button type="submit" class="btn  btn-primary" id="eliminar">
												<span class="glyphicon glyphicon-cloud-upload"></span>
												Eliminar producto
											</button>
											
											<button type="reset" value="Reset" class="btn btn-primary pull-right " id="elimina_otro">
												<span class="glyphicon glyphicon-pencil"></span>
											eliminar otro</button> 
										</div>		
						</form>	
		    	</div>
		    	
		    	
		    </div>

		</div>	

		<div class="pie">
			<img src="img/desk.jpg" class="img-responsive" alt="Image">
		</div>
	</div>
</body>
</html>

