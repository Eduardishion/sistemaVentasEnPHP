<?php 
//Inicio la sesión 
session_start(); 

?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Advertencia</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/cuad.css">
	<link rel="stylesheet" href="css/animate.css">
	<script src="js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container degradado">
		<div class="row"><br /><br /><br /><br />
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
				<img src="img/Error.png" class="img-responsive center-block" alt="Image"  height="300" width="300" >
			</div>
		</div>
		<div class="row">
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				
			</div>
			<div class="col-xs-6 col-sm-6 col-md-6 col-lg-6 text-center" >
				<?php 
				if($_SESSION["tipo"]=="ADMINISTRADOR") {
					# code...

				 ?>

					<p>Tus privilegios como usuario :<?php echo $_SESSION["tipo"]; ?> no te permiten entrar "AQUI". Gracias por tu atencion 
					</p>
					<a href="pagina7.php " >menu inicio</a>
					
				<?php 
					}elseif($_SESSION["tipo"]=="RECEPCIONISTA"){

				?>
					<p>Tus privilegios como usuario :<?php echo $_SESSION["tipo"]; ?> no te permiten entrar "AQUI". Gracias por tu atencion 
					</p>
					<a href="pagina10.php" >menu inicio</a>

				<?php 
					}
				 ?>	
			</div>
			<div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">
				
			</div>

			
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br /><br />
			</div>
		</div>
	</div>
	
		
    
</body>
</html>