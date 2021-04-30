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
	<title>Pagina 8</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/cuad.css">
	<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
<!--<script src="js/jquery-1.10.1.min.js"></script>-->
	<script src="js/validCampoFranz.js"></script>
	<script src="js/funciones4.js"></script>
	
	<!--<script src="js/validCampoFranz.js"></script>-->
</head>
<body >
		<div class="container-fluid degradado">
			<!--cabesera -->
			<div class="row">
				<br />
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
            		<?php 
						echo '<p class="alert alert-info ">'.'Elige una opcion : '.$_SESSION["nombre"].'</p>';				   
					?>
				</div>
				<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6">
					<h1>Vista de usuarios registrados</h1>
					<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right center-block" onClick=" window.location.href='pagina7.php' ">Ver menú</button>


				</div>
				<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3 text-center" >
					

					<a href="php/salida.php" class="alert alert-danger" >Cerrar sesión</a>
				</div>
			</div>
			<!--fin de cabesera -->
			<!--cuerpo contenedor-->
			<div id="pestañas" >
				<ul >
				    <li><a href="#Primera-1">Mostrar datos</a></li>
				    <li><a href="#Segunda-2">Actualizar datos</a></li>
				    <li><a href="#Tercera-3">Eliminar datos</a></li>
				 </ul>

				<div id="Primera-1" >
		    		
						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12" style=" height:500px;overflow:scroll;" >
							
							<table class="table table-hover table-striped table-condensed"  >
								<thead>
									<tr class="success">
										<th>Id</th>
							            <th>Nombre</th>
							            <th>Apellido Paterno</th>
							            <th>Apellido Materno</th>
							            <th>E-mail</th>
							            <th>Contraseña</th>
							            <th>Teléfono</th>
							            <th>Dirección</th>
							            <th>Tipo</th>
							            
									</tr>
								</thead>
								<tbody>
									<tr>
										<?php
											include ("php/mostrar_personas.php");
										?>
									</tr>
								</tbody>
							</table>
						</div>
  				
  				</div>
  				
  				<div id="Segunda-2" >
  					 	
  					 	<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 center-block visible-lg visible-md">
							<article>
								<div id="mensaje">
								
								</div>
							</article>
						</div>  
						<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 bordes sombra-form">
								<form method="post" action"php/crear.php" role="form-horizontal">
										<legend><h1>Modifica los datos de usuario </h1><small>Es indispensable ingresar el identificador</small></legend>
										<div class="form-group">
											<label for="id_personal">Id_personal</label>
											<input type="text" class="form-control" id="id_personal" placeholder="ingresa tu id" name="id_personal">
										</div>
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
													<option value="">  selecciona  </option>
													<option value="Administrador" > Administrador </option>
													<option value="Recepcionista" > Recepcionista </option>
												</select>
												
											</div>
										
										 </div><br />
										<div class="ultimo">
											<img src="img/ajax.gif" class="hide"  id="imag" />
											<div class="msg hide" id="con"></div>
											<button type="submit" class="btn  btn-primary" id="crear">
												<span class="glyphicon glyphicon-cloud-upload"></span>
												Modificar cuenta 
											</button>
											
											<button type="reset" value="Reset" class="btn btn-primary pull-right " id="res">
												<span class="glyphicon glyphicon-pencil"></span>
											Modificar otro</button>

										</div>		
						 		</form>	
						 		<br />
						</div> 
						<div class="col-xs-2 col-sm-2 col-md-2 col-lg-2 center-block visible-lg visible-md">
							<article>
								
							</article>
						</div> 
				</div>

				
				<div id="Tercera-3">

					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
						<form method="post" action"php/elimnar_per.php" role="form-horizontal">
								<legend><h1>Eliminación de persona</h1><small>Es indispensable el id para eliminar una persona</small></legend>
										<div class="form-group">
											<label for="id_per">Id_personal</label>
											<input type="text" class="form-control" id="id_per" placeholder="ingresa tu id" name="id_per">
										</div>
										
										<div class="ultimo">
											<img src="img/ajax.gif" class="hide"  id="imag" />
											<div class="msg hide" id="con"></div>
											<button type="submit" class="btn  btn-primary" id="eliminar">
												<span class="glyphicon glyphicon-cloud-upload"></span>
												Eliminar persona
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
			<!--fin cuerpo contenedor-->
			<!-- pie de pagina-->
			
			<!-- pie de pagina-->
		</div>		
</body>
</html>

