<?php 
	session_start(); 
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI") { 
   	//si no existe, envio a la página de autentificacion 
   	header("Location: ../../entrada.php");   
   	//ademas salgo de este script 
   	exit(); 
}	
 ?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Detalles</title>
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/cuad.css">
	<link rel="stylesheet" href="../../css/color.css">
	<link rel="stylesheet" href="../../css/animate.css">
	<script src="../../js/jquery-1.11.1.min.js"></script>
</head>
<body>
	<div class="container-fluid degradado">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<br /><br />
				<h1>Detalles de articulo</h1>
				<br /><br /><br />
			</div>
		</div>
		<div class="row ">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				<img src="../../img/producto.png" class="img-responsive" alt="Image">
			</div>
			<div class="col-xs-7 col-sm-7 col-md-7 col-lg-7 text-center " >
				


				<?php 
					include ("../conec.php");
					//consulta todos los prodcutos
					
					$id_producto=$_GET['id_producto'];
					$sql=mysql_query("select * from nuevo_producto where id_producto=$id_producto",$con);

					while($fila = mysql_fetch_array($sql)){

						$id_producto=$fila['id_producto'];
						$codigo=$fila['codigo'];
						$nombre=$fila['nombre'];
						$precio=$fila['precio'];
						$clase=$fila['clase'];
						$marca=$fila['marca'];
						$registro=$fila['registro'];
						$caducidad=$fila['caducidad'];
						$descripcion=$fila['descripcion'];



						echo "El identificador del producto es:".$id_producto."<br />".
						"El codigo del producto es:".$codigo."<br />".
						"El nombre del producto es:".$nombre."<br />".
						"El precio del producto es:".$precio."<br />".
						"El clase del producto es:".$clase."<br />".
						"La marca del producto es:".$marca."<br />".
						"El registro del producto es:".$registro."<br />".
						"La caducidad del producto es:".$caducidad."<br />".
						"La descripcion del producto es:".$descripcion."<br />";

															
					}
				?>
				<a href="../../pagina6.php" class="btn btn-primary btn btn-lg ">ir a productos</a>
				<a href="carrito.php?id_producto=<?php echo $id_producto ?> " class="btn btn-primary btn btn-lg ">Añadir al carrito </a>
			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				
			</div>

			
		</div>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				<br /><br /><br /><br /><br /><br />
			</div>
		</div>
	</div>
	

</body>
</html>

