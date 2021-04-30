<?php 
	session_start(); 
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
	if ($_SESSION["autentificado"] != "SI") { 
	   	//si no existe, envio a la página de autentificacion 
	    header("Location: ../../entrada.php");  
	   	//ademas salgo de este script 
	   	//
	   	exit(); 
	}	
	include ("../conec.php");
	if (isset($_SESSION["carrito"])) {
		if(isset($_GET['id_producto'])){
			# code...
			/*1.-guardar en arreglo la variable de session*/ 
			$vector=$_SESSION['carrito'];
			/*declaramos las variables siguientes que serviran como vanderas*/
			$encontro=false;
			$numero=0;
			for ($i=0; $i <count($vector); $i++) { 
				/*se determina que si lo que el arrglo en su posicion id_producto es igual a lo que trae el get id_producto de la pagina6.php */
				if ($vector[$i]['Id_producto']==$_GET['id_producto']) {
					# code...
					$encontro=true; //la bandera secoloca en true para saber que si lo encontro y si es igual
					$numero=$i;//para saber la posiscion del arreglo
				}

			}
			/*verificamos si esla bandera es true despues del ciclo*/
			/*entonces le incrementamos 1 a */
			if ($encontro==true) {
				//$vector[$numero]['Id_producto']++;
				$vector[$numero]['Cantidad']=$vector[$numero]['Cantidad']+1;

				/*guardamos en varible de session el carrito */
				$_SESSION['carrito']=$vector;
			}else{
							$nombre="";
							$precio=0;
							$codigo=0;
							$consulta=mysql_query("select * from nuevo_producto where id_producto=".$_GET['id_producto']);
							while ($fila=mysql_fetch_array($consulta)) {
								$nombre=$fila['nombre'];
								$precio=$fila['precio'];
								$codigo=$fila['codigo'];
								
							}
							$datosNuevos=array('Id_producto'=>$_GET['id_producto'],
											'Codigo'=>$codigo,
											'Nombre'=>$nombre,
											'Precio'=>$precio,
											'Cantidad'=>1);

							array_push($vector, $datosNuevos);
							$_SESSION['carrito']=$vector;

			}
	 
	  }	
	}else{
		/*1.-saber si existe la variable id que pasa desde la otra pagina desde el metodo GET  */
		if (isset($_GET['id_producto'])) {
			/*2.-declaramos que variables vacias para almacenar datos referenciado por el ID*/
			/*id_producto*/
			$id_pro=$_GET['id_producto'];
			$codigo=0;
			$nom="";
			$precio=0;
			/*3.-hacer la consulta para ver los producto dependiendo del id que se selecciono*/

		$sql=mysql_query("select * from nuevo_producto where id_producto=$id_pro",$con);
			/*4.-recorremos la el vector y lo almacenamos en la varable fila*/
			/*Las variables del while estan en MINUSCULAS no confundir cn las del arreglo*/
	
			while ($fila = mysql_fetch_array($sql)) {

				$codigo=$fila['codigo'];
				$nom=$fila['nombre'];
				$precio=$fila['precio'];
				
			}
			/*5.-crear el arrrglo que se guardara en la variable de sesion*/
			/*no confundir la vasriables de es arreglo llamado vector sus variable comienzan con MAYUSCULA*/
			$vector[]=array('Id_producto'=>$id_pro,
							'Codigo'=>$codigo,
							'Nombre'=>$nom,
							'Precio'=>$precio,
							'Cantidad'=>1 );
			/*6.- ahora guardar en la varible de sesion*/
			$_SESSION['carrito']=$vector;	

		}else{
			echo "<p>no exite valor de id aun no has selecionado productos</p>";
		}
	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Articulos de carrito</title>
	<link rel="stylesheet" href="../../css/bootstrap.css">
	<link rel="stylesheet" href="../../css/cuad.css">
	<script src="../../js/jquery-1.11.1.min.js"></script>
	<script src="../../js/funciones6.js"></script>
</head>
<body class="degradado">
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
			
		</div>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 text-center">
				<h1>Productos de venta</h1>
				<a href="../salida.php" class="alert alert-danger pull-right" >Cerrar sesion</a> 
				<a href="../../pagina6.php" class="btn btn-primary  ">Agregar articulo</a>
				<a href="../../pagina4.php"class="btn btn-primary ">Ver ventas</a>
		</div>
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				
		</div>	
	</div>
	<div class="row">
		<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
			
		</div>
		<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 ">
			<!--se verifica que si exiten artulos en el carrito -->
		<ul >
			<?php 
			/*$id_producto=$_GET['id_producto'];
			echo "el prodcuto tien un id :".$id_producto;*/
			$total=0;
			if (isset($_SESSION['carrito'])) {/*inicio llave de if */
				# code...
				$articulos=$_SESSION['carrito'];
				
				for ($i=0; $i <count($articulos) ; $i++) { /*inicio llave de for */
				# code...
			?>      
					<div class="producto">
						
					<li class="sombra-form bordes">
						<!--Aqui solo se estan imprimiendo los articulos
						el nombre de las variables Id_producto,Codigo,Nomnre,Precio 
						no son de la base de datos -->
						<a href="#" class="eliminar btn btn-danger" data-id="<?php echo $articulos[$i]['Id_producto'] ?>">Eliminar</a>
						<span class="lista_conte">Id producto: <?php echo $articulos[$i]['Id_producto']  ?></span>
					    <span>Codigo: <?php echo $articulos[$i]['Codigo']  ?></span>
						<span class="lista_conte">Nombre: <?php echo $articulos[$i]['Nombre']  ?></span>
						<span>Precio: <?php echo $articulos[$i]['Precio']  ?></span>
						<span class="lista_conte">Cantidad de articulos: 
						<input type="text" value="<?php echo $articulos[$i]['Cantidad']  ?>" data-precio="<?php echo $articulos[$i]['Precio']  ?>" data-id="<?php echo $articulos[$i]['Id_producto']  ?>" class="cantidad"id="cantidad">
						</span>
						<span class="subtotal">subtotal: <?php echo $articulos[$i]['Precio']*$articulos[$i]['Cantidad']?></span><br />
						<!-- <a href="#" class="btn btn-danger eliminar" data-id="<?php //echo $articulos[$i]['Id_producto']  ?>">Eliminar</a>
 -->
						
					</li><br />
					</div>
						  			
			<?php
				$total=($articulos[$i]['Precio']*$articulos[$i]['Cantidad'])+$total;
		   		}/*fin llave de for */
		   	/*fin llave de if */
			}else{
				/*cuando no hay articulos en el carrito mansa este mensaje*/
				echo "<p class='text-center'>No hay articulos en el carrito de compras</p>";
			}

			//echo '<p><h2>id="total"</h2>El total es:'.$total.'</p>';
			echo '<center><h2 id="total">Total de compra: '.$total.'</h2></center>';
			if($total != 0){
					echo '<center><a href="compras.php" class="aceptar btn btn-primary">Comprar</a></center>;';
			}

			?>
			<!-- <a href="carrito.php?id_producto=<?php //echo $id_producto ?>">Añadir al carrito </a> -->
		</ul>
		
		
		</div>
		 <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				<div id="mensaje">
					
				</div>.
				
		</div>	
	</div>

	
</body>
</html>
