<?php 
	
	$codigo=$_POST['codigo'];
	//print("el nombre es:".$nombre);

	include ("conec.php");
	//consulta todos los prodcutos
					
	
	$sql=mysql_query("select * from nuevo_producto where codigo LIKE '%$codigo%' ORDER BY codigo ",$con);
	//$sql=mysql_query("select * from nuevo_producto where nombre LIKE $nombre ORDER BY nombre",$con);

	/*if($sql === FALSE) {
    	die(mysql_error()); // TODO: better error handling
	}*/
	
	while($fila = mysql_fetch_array($sql)){
		$id_producto=$fila['id_producto'];
		$codigo=$fila['codigo'];
		$nombre=$fila['nombre'];
		$precio=$fila['precio'];
    	echo "Id:".$id_producto."  Codigo:".$codigo."  Nombre:".$nombre."  Precio:".$precio;

    echo "<a href='php/carrito/detalles.php?id_producto=". $id_producto . "'>ver detalles</a>";	         
	echo "<a href='php/carrito/carrito.php?id_producto=". $id_producto . "'>Cargar carrito</a>";
	echo "<br />";
	}



///



?>