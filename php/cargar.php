
<?php 

 include ("conec.php");
//variables POST
	
  $codigo=$_POST['codigo'];
  $nombre=$_POST['nombre'];
  $clase=$_POST['clase'];
  $marca=$_POST['marca'];
  $precio=$_POST['precio'];
  $registro=$_POST['registro'];
  $caducidad=$_POST['caducidad'];
  $descrip=$_POST['descripcion'];

 //  $lada=$_POST['lada'];
 //  $telefono=$_POST['telefono'];
 //  $estado=$_POST['estado'];
 //  $municipio=$_POST['municipio'];
 //  $colonia=$_POST['colonia'];
 //  $calle=$_POST['calle'];
 //  $numero=$_POST['numero'];
	// print("esta es tu correo electronico".$_POST['email']);
 
//registra los datos del empleados
//                 
 $sql="INSERT INTO nuevo_producto (codigo,nombre, clase, marca, precio, registro, caducidad,descripcion) 
 VALUES ('$codigo','$nombre','$clase','$marca','$precio','$registro','$caducidad','$descrip')";


	mysql_query($sql,$con) or die('Error. '.mysql_error());
 ?>
