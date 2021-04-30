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

	for($i=0;$i<count($vector);$i++){
		if($vector[$i]['Id_producto'] != $_POST['Id']){
			$datosNuevos[]=array(
				'Id_producto'=>$vector[$i]['Id_producto'],
				'Codigo'=>$vector[$i]['Codigo'],
				'Nombre'=>$vector[$i]['Nombre'],
				'Precio'=>$vector[$i]['Precio'],
				'Cantidad'=>$vector[$i]['Cantidad']
				);
		}

		
	
	}
	if(isset($datosNuevos)){
		$_SESSION['carrito']=$datosNuevos;
	}else{
		unset($_SESSION['carrito']);
		echo '0';
	}

?>
