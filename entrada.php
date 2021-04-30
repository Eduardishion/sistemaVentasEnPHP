<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>entrada</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/cuad.css">
	<link rel="stylesheet" href="css/animate.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/funciones1.js"></script>
</head>
<body class=" degradado ">
	
    <div class="container-fluid">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
			<br />
			<br />
			</div>
		</div>
		
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4" id="efect">
					<img src="img/im1.png" class=" rounded img-responsive center-block borde_1" alt="Image" id="ima">
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>
		</div>
    	<div class="row " id="for">
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<!--primera columna-->
					</div>
					
					<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 bordes sombra-abj">
						<!--segunda columna-->
						
						<!--inicio de formulario-->
					<article>
						<form action="php/verificar.php" method="POST" role="form" >
							<legend><h1>Inicio de sesión</h1></legend>

							<div class="form-group">
								<label for="usuario">Usuario</label>
								<input type="text" class="form-control" name="usu" id="usu" placeholder="Juan_Perez_Adm">
								<label for="contraseña">Contraseña</label>
								<input type="Password" class="form-control" name="contra" id="contra" placeholder="Captura tu contraseña">
							</div>
							<!-- 
							<div class="form-group">
									<label for="selector">Usuario </label>	
									<div class="form-group">
										<select name="op" id="op" class="form-control">
											<option value=""> selecciona  </option>
											<option value="Administrador" > Administrador </option>
											<option value="Recepcionista" >Recepcionista</option>
										</select>	

									</div>
							</div> -->
							<!-- <button type="submit" class="btn btn-primary pull-right" onClick=" window.location.href='pagina3.html'">Entrar</button> -->
						<!-- 	<input type="button" value="enviar" onClick=" window.location.href='pagina3.html' " class="pull-right btn btn-primary btn btn-lg btn-block"> 
						<input type="submit" name="enviar" value="Enviar" >
					-->
							<input type="submit" name="enviar" value="Entrar"class="pull-right btn btn-primary btn btn-lg btn-block" id="entrar">

							<!-- <button type="button" onClick=" window.location.href='pagina7.html' " class="pull-right btn btn-primary btn btn-lg btn-block" >Entrar</button><span></span> -->
							<!--
							<span><p>No eres usuario</p><a href="pagina2.php" class="pull-left ">Registrarse</a></span>
							-->
							<br />
							<br />
						</form>
						
					</article>

					<article>
						<br />
						<?php
							/*variable vandera indicadora inico de secion si puede acceder o no */
								/*if (! isset ($_GET["errorusuario"]) ) {
									echo '<p class="error">la varible aun no exite</p>';
								}

								
								*/
								// if (!isset($_GET["errorusuario"])){
								// 	echo '<p class="error">variable no exite</p>';
								// }
								
								if (!isset($_GET["errorusuario"])) {
									echo '<p class="msg_php_ok ">Si eres usuario ingresa tus datos,sino debes registrarte</p>';
								}elseif ($_GET["errorusuario"]=="si") {
									echo '<p class="error">datos son incorrectos o no estas registrado como usuario</p>';
								}else{
									echo '<p class="msg_php_ok ">Si eres usuario ingresa tus datos,sino debes registrarte</p>';
								}
								// if ($_GET["errorusuario"]=="si"){ 	
								// 	echo '<p class="error">datos incorrectos o no estas registrado</p>';
								// }else{
								// 	echo '<p class="msg_php_ok ">Si eres usuario ingresa tus datos, si no es asi registrate</p>';
								// }
								
								
								

								/*if (isset($var)) {
    								echo "Esta variable está definida, así que se imprimirá";
								}*/


						?>
						<br />
						<br />
						<p class="visible-md visible-lg text-justify">
							
							Es importante que te registres para ingresar al sistema de lo contrario no se podrás realizar ninguna acción dentro de el, ni utilizar la funciones que brinda
						</p>
						
					</article>
						<!--fin de formualario de formulario-->
						
						
						<br />
						<br />
					</div>
					<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
						<!--tercera columna-->
					</div>
				</div>
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br />
				<br />
			</div>
    </div>

</body>
</html>