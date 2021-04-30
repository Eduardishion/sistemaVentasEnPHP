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
	<title>Pagina6</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<!--<link rel="stylesheet" href="css/color.css">-->
	<link rel="stylesheet" href="css/cuad.css">
	<link rel="stylesheet" href="css/jquery-ui-1.10.4.custom.css">
	<script src="js/jquery-1.11.1.min.js"></script>
	<script src="js/jquery-ui-1.10.4.custom.min.js"></script>
	<script src="js/funciones3.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var autocompletar = new Array();//Esto es un poco de php para obtener lo que necesitamos
	    	<?php 
	    		  include "php/autocom.php" ;
	     		  for($p = 0;$p < count($arreglo_php); $p++){ 
	     		  //usamos count para saber cuantos elementos hay 
	     	?>
       				autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
	     	<?php } 
	     	?>
			$("#completar").autocomplete({//Usamos el ID de la caja de texto donde lo queremos
      			source: autocompletar //Le decimos que nuestra fuente es el arreglo
     		});
		});	
	</script>
	<script type="text/javascript">
		$(document).ready(function() {
			var auto = new Array();//Esto es un poco de php para obtener lo que necesitamos
	    	<?php 
	    		  include "php/auto.php" ;
	     		  for($p = 0;$p < count($arreglo_php); $p++){ 
	     		  //usamos count para saber cuantos elementos hay 
	     	?>
       				auto.push('<?php echo $arreglo_php[$p]; ?>');
	     	<?php } 
	     	?>
			$("#completar2").autocomplete({//Usamos el ID de la caja de texto donde lo queremos
      			source: auto //Le decimos que nuestra fuente es el arreglo
     		});
		});	
	</script>
	<script language="javascript">
		$(document).ready(function() {
			$().ajaxStart(function() {
			        $('#loading').show();
			        $('#resultado').hide();
			}).ajaxStop(function() {
			        $('#loading').hide();
			        $('#resultado').fadeIn('slow');
			});
			$('#form').submit(function() {     
			        $.ajax({
			            type: 'POST',
			            url: $(this).attr('action'),
			            data: $(this).serialize(),
			            success: function(data) {
			                $('#resultado').html(data);

			            }
			        })
			        return false;
			}); 
		});  
	</script>
	<script language="javascript">
		$(document).ready(function() {
			$().ajaxStart(function() {
			        $('#loading').show();
			        $('#resultado2').hide();
			}).ajaxStop(function() {
			        $('#loading').hide();
			        $('#resultado2').fadeIn('slow');
			});
			$('#form2').submit(function() {     
			        $.ajax({
			            type: 'POST',
			            url: $(this).attr('action'),
			            data: $(this).serialize(),
			            success: function(data) {
			                $('#resultado2').html(data);

			            }
			        })
			        return false;
			}); 
		});  
	</script>
</head>
<body >
	<div class="container-fluid degradado">
		<header></header>
		<nav></nav>
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h1>Modulo de punto de venta</h1>
			</div>

		</div>
		<div class="row">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 ">
			
			<form action="php/busqueda_nombre.php" method="POST" role="form" id="form">
				<legend>Búsqueda</legend>
				
				<p>Puedes buscar el producto para poderlo eliminar ya sea por nombre, por clave, por código.</p>
				<div class="form-group">
					<label for="completar">Nombre</label>
					<input type="text" id="completar" name="nombre" class="form-control" id="" placeholder="Ingresa nombre del producto ">
					<button type="submit" id="buscar" class="btn btn-primary">Buscar</button>
				</div>
			</form>	
			<p>o</p>
			<form action="php/busqueda_codigo.php" method="POST" role="form" id="form2">
				<div class="form-group">
					<label for="completar2">Código</label>
					<input type="text" class="form-control" id="completar2" name="codigo" placeholder="ingresa codigo de producto ">
					<button type="submit" id="buscar2" class="btn btn-primary">Buscar</button>
				</div>
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
						 <button type="button" class="btn btn-info glyphicon glyphicon-arrow-right " onClick=" window.location.href='php/carrito/carrito.php' ">Ver carrito</button>
			</form>
		
		</div>


		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 ">
			<!-- <img src="img/im6.png" class="img-responsive" alt="Image"> -->
			<div id="productos">
				  <h1 class="ui-widget-header">Productos</h1>
				  <div id="catalogo">
				  	<h2><a href="#">Todos los productos</a></h2>
				    <div style=" height:250px;overflow:scroll;">
				    	<ul>
					    	<?php 
					    		include ("php/conec.php");
								//consulta todos los prodcutos
								$sql=mysql_query("SELECT * FROM nuevo_producto",$con);

								while($fila = mysql_fetch_array($sql)){
								$id_producto=$fila['id_producto'];
								$codigo=$fila['codigo'];
								$nombre=$fila['nombre'];
								$precio=$fila['precio'];

							?>		
							
							<li > 
							<?php 
								echo "Id:".$id_producto."  Codigo:".$codigo."  Nombre:".$nombre."  Precio:".$precio;

							?><br />
							<a href="php/carrito/detalles.php?id_producto=<?php echo $id_producto ?>">ver detalles</a>	
							<a href="php/carrito/carrito.php?id_producto=<?php echo $id_producto ?>">Cargar carrito</a>	
							</li>  
												
							<?php 
							   }
							?>
						</ul>
				    </div>
				    <h2><a href="#">Productos por nombre</a></h2>
				    <div id="resultado">
				      <ul>
				        <li>No has hecho ninguna búsqueda...</li>
				      </ul>
				    </div>
				    <h2><a href="#">Productos código</a></h2>
				    <div id="resultado2">
				      <ul>
				        <li>No has hecho ninguna búsqueda...</li>
				      </ul>
				    </div>
				  </div>
				</div>
		</div>
		</div>
	
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
				
			</div>
			
		</div>
		<div class="row">
			<!-- <div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
 
					<div id="lista">
					  <h1 class="ui-widget-header">Lista de productos</h1>
					  <div class="ui-widget-content">
					    <ol>
					      <li class="placeholder">Agrega los productos Aqui</li>
					    </ol>
					  </div>
					</div>
				  </div>
				<br /><br />
			</div> -->

		<footer>
			<img src="img/desk.jpg" class="img-responsive" alt="Image">
		</footer>
	</div>
</body>
</html>