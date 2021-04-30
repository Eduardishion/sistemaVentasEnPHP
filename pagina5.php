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
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>pagina5</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
	
</head>
<body class="degradado">
	<div class="container-fluid degradado">
		<header></header>
			<nav></nav>

				<div class="row">

						<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
							<h1>Modulo de inventario</h1>
							<?php 
							if ( $_SESSION["tipo"]=="RECEPCIONISTA") {    
							?>
							  <button type="button" class="btn btn-info glyphicon glyphicon-arrow-right " onClick=" window.location.href='pagina10.php' ">Ver menú</button>	
							<?php 
							 }else{

							?>
								<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right " onClick=" window.location.href='pagina7.php' ">Ver menú</button>	

							<?php 
								 }
							 ?>
				
			   
				
								<table class="table table-hover table-striped table-condensed text-center"  >
								<thead>
									<tr class="success">
							            <th>Nombre</th>
							            <th>Exisistencias</th>
							             <th>id_producto</th>
										 <th>clase</th>
										 <th>código</th>
										 <th>marca</th>
										 <th>registro</th>
										 <th>caducidad</th>
									</tr>
								</thead>
								<tbody>
									<tr>

										<?php
											include ("php/conteo_productos.php");
										?>
									</tr>
								</tbody>
							</table>
						</div>

				</div>
				<!-- <div class="row">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
							<h1>Modo de mostrar</h1>
					          <ui class="list-group">
					            <li class="list-group-item"><div class="checkbox">
					            	<label>
					            		<input type="checkbox" value="">
					            		Nombre
					            	</label>
					            </div> </li>
					            <li class="list-group-item"><div class="checkbox">
					            	<label>
					            		<input type="checkbox" value="">
					            		Precio
					            	</label>
					            </div> </li>
					            <li class="list-group-item"><div class="checkbox">
					            	<label>
					            		<input type="checkbox" value="">
					            		Fecha de caducidad
					            	</label>
					            </div> </li>
					            <li class="list-group-item"><div class="checkbox">
					            	<label>
					            		<input type="checkbox" value="">
					            		Fecha de ingreso 
					            	</label>
					            </div> </li>
					            <li class="list-group-item"><div class="checkbox">
					            	<label>
					            		<input type="checkbox" value="">
					            		Cantidad
					            	</label>
					            </div> </li>
					            <li class="list-group-item"><div class="checkbox">
					            	<label>
					            		<input type="checkbox" value="">
					            		Existencia
					            	</label>
					            </div> </li>
					            <li class="list-group-item"><div class="checkbox">
					            	<label>
					            		<input type="checkbox" value="">
					            		Codigo
					            	</label>
					            </div> </li>
					          </ui>
					         <button type="button" class="btn btn-primary">mostrar </button>
					     
					</div>	
					<div class="col-xs-9 col-sm-9 col-md-9 col-lg-9">
						
					<ul class="list-group">
						<li class="list-group-item"><span><button type="button" class="btn btn-primary">Imprimir</button> registros </span></li>
						<li class="list-group-item"><span><button type="button" class="btn btn-primary">Ordenar A</button> Ordenar lista acendentemente</span></li>
						<li class="list-group-item"><span><button type="button" class="btn btn-primary">Ordenar D</button> Ordenar lista Dentemente</span></li>
						<li class="list-group-item"><span><button type="button" class="btn btn-primary">Nuevo elemento</button> Agregar producto</span></li>
						<li class="list-group-item"><span><button type="button" class="btn btn-primary">Salir</button></span></li>
					</ul>

					</div>
				</div> -->
		<footer></footer>	
	</div>
	

</body>
</html>