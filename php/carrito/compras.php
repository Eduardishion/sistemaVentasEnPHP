 <?php
session_start();
if ($_SESSION["autentificado"] != "SI") { 
    //si no existe, envio a la página de autentificacion 
    	header("Location: ../../entrada.php"); 
    
    //ademas salgo de este script 
    exit(); 
}
include "../conec.php";
		$vector=$_SESSION['carrito'];
		$nomper=$_SESSION["nombre"];
		/*DESCOMENTAR SI YA NO QUIERE GUARDAR LOS DATOS EN COMPRAS*/
		$numeroventa=0;

		$consulta=mysql_query("select * from ventas order by no_venta DESC limit 1") or die(mysql_error());	
		while (	$fila=mysql_fetch_array($consulta)) {
					$numeroventa=$fila['no_venta'];	
		}
		if($numeroventa==0){
			$numeroventa=1;
		}else{
			$numeroventa=$numeroventa+1;
		}
		for($i=0; $i<count($vector);$i++){
			mysql_query("insert into ventas (no_venta,nom_persona,nombre,precio,cantidad,subtotal) values(
				".$numeroventa.",
				'$nomper',
				'".$vector[$i]['Nombre']."',	
				'".$vector[$i]['Precio']."',
				'".$vector[$i]['Cantidad']."',
				'".($vector[$i]['Precio']*$vector[$i]['Cantidad'])."'
				)")or die(mysql_error());
		}
		//para eliminar el producto de la base datos
		//
		for($i=0; $i<count($vector);$i++){

			$id_produc=$vector[$i]['Id_producto'];

			$sql="delete from nuevo_producto  WHERE id_producto = $id_produc ";

			mysql_query($sql,$con) or die('Error. '.mysql_error());
		}


		


		unset($_SESSION['carrito']);
		header("Location: carrito.php"); 
		
	

?>