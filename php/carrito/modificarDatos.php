<?php 
	session_start(); 
	if ($_SESSION["autentificado"] != "SI") { 
	   	//si no existe, envio a la página de autentificacion 
	   		header("Location: ../../entrada.php");  
	   	//ademas salgo de este script 
	   	//
	   	exit(); 
	}
	$vector=$_SESSION['carrito'];
	$total=0;
	$numero=0;
	for($i=0;$i<count($vector);$i++){
		if($vector[$i]['Id_producto']==$_POST['Id_producto']){
			$numero=$i;
		}
	}
	$vector[$numero]['Cantidad']=$_POST['Cantidad'];
		for($i=0;$i<count($vector);$i++){
				$total=($vector[$i]['Precio']*$vector[$i]['Cantidad'])+$total;
		}
	$_SESSION['carrito']=$vector;
	echo $total;

 ?>