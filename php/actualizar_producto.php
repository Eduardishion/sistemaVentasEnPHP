<?php 
  
  //Configuracion de la conexion a base de datos
include ("conec.php");
 
//variables POST
  
  $id_producto=$_POST['id_producto'];
  $codigo = $_POST['codigo'];
  $nombre = $_POST['nombre'];
  $clase = $_POST['clase'];
  $marca = $_POST['marca'];
  $precio = $_POST['precio'];
  $registro = $_POST['registro'];
  $caducidad = $_POST['caducidad'];
  $descripcion = $_POST['descripcion'];  
  
 
  $sql="update nuevo_producto set codigo='$codigo',nombre='$nombre',clase='$clase', marca='$marca',precio='$precio',registro='$registro',caducidad='$caducidad',descripcion='$descripcion' WHERE id_producto = $id_producto ";


mysql_query($sql,$con) or die('Error. '.mysql_error());
 


 ?>

