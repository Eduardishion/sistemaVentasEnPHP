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
<!--etique del idioma que se utilizara-->
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pagina 2</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/cuad.css">
	<link rel="stylesheet" href="css/animate.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<!--<script src="js/jquery-1.10.1.min.js"></script>-->
	<script src="js/validCampoFranz.js"></script>
	<script src="js/funciones.js"></script>
	<!--<script src="js/validCampoFranz.js"></script>-->
</head>
<body >
		<div class="container-fluid degradado">
			<!--cabesera -->
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" id="mensaje">
					<br /><br />

				</div>
			</div>
			<!--fin de cabesera -->
			<!--cuerpo contenedor-->
			<div class="row">
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
					
				</div>
				<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 center-block visible-lg visible-md">
	
					<article>
						<br />
						<br />
						<?php 
							   echo '<p class="alert alert-info ">'.'Personal que esta registrando: '.$_SESSION["nombre"].'</p>';
							   
						 ?>
						<img src="img/im5.jpg" class="img-responsive sombra_img borde_1" alt="Image" id="ima">
						<br />
						<?php 
							echo '<p class="alert alert-danger">No olvides llenar todos los campos</p>';
						 ?>

						 <button type="button" class="btn btn-info glyphicon glyphicon-arrow-left" onClick=" window.location.href='pagina8.php' ">Ver usuarios</button>
						<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right pull-right" onClick=" window.location.href='pagina7.php' ">Ver menú</button>
					</article>
				</div> 
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 bordes sombra-form">
					
					<form method="post" action"php/crear.php" role="form-horizontal">
						<legend><h1>Crea una cuenta</h1><small>Es indispensable para entrar al sistema</small></legend>
								<div class="form-group">
									<label for="nombre">Nombre</label>
									<input type="text" class="form-control" id="nombre" placeholder="Nombre" name="nombre">
								</div>
								<div class="form-group">
									<label for="apellido">Apellido paterno</label>
									<input type="text" class="form-control" id="apellido1" placeholder="Apellido paterno" name="apellido1">
								</div>
								<div class="form-group">
									<label for="apellido">Apellidos materno</label>
									<input type="text" class="form-control" id="apellido2" placeholder="Apellido materno" name="apellido2">
								</div>
								<div class="form-group">
									<label for="email">Correo electrónico</label>
									<input type="email" class="form-control" id="email" placeholder="Tu correo" name="email">
								</div>
							    <div class="form-group">
									<label for="contraseña1">Contraseña</label>
									<input type="Password" class="form-control" id="contra1" placeholder="Contraseña" name="contra1">
								</div>
								<div class="form-group">
									<label for="contraseña2">Repite contraseña</label>
									<input type="Password" class="form-control" id="contra2" placeholder="Repite contraseña" name="contra2">
								</div>
								<div class="form-group">
										<label for="fecha">Teléfono</label>
										<input type="text" class="form-control" id="telefono" name="telefono" placeholder="Telefono" >
								</div>
								<div class="form-group">
										<label for="fecha">Dirección</label>
										<input type="text" class="form-control" id="direccion" name="direccion" placeholder="Direccion" >
								</div>
								
								<div class="form-inline">
									<label for="selector">Elige un usuario</label>	
									<div class="form-group">
										<select name="opcion" id="opcion" class="form-control">
											<option value="">--  selecciona  --</option>
											<option value="Administrador" >-- Administrador --</option>
											<option value="Recepcionista" >-- Recepcionista --</option>
										</select>
										
									</div>
									
									
								<!--
								<i class="icon-white icon-ok-sign"> </i>

								<input type="image" name="enviar" src="accept.png"  />
								-->
								</div><br />
								<div class="ultimo">
									<img src="img/ajax.gif" class="hide"  id="imag" />
									<div class="msg hide" id="con"></div>
									<button type="submit" class="btn  btn-primary" id="crear">
										<span class="glyphicon glyphicon-cloud-upload"></span>
										Crear cuenta
									</button>
									
									<button type="reset" value="Reset" class="btn btn-primary pull-right " id="res">
										<span class="glyphicon glyphicon-pencil"></span>
									Nuevo</button>
									<!-- <input type="reset" value="Reset" class="btn btn-primary pull-right " id="res"> -->
								</div>
								<br />		
					</form>	
				
				</div>
				<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1 visible-lg visible-md">
				
				</div> 
			</div>	
			<!--fin cuerpo contenedor-->
			<!-- pie de pagina-->
			<div class="row">
				<img src="img/desk.jpg" class="img-responsive" alt="Image">
			</div>
			<!-- pie de pagina-->
		</div>		
</body>
</html>