<?php 
  
	//Configuracion de la conexion a base de datos
  include ("conec.php");
 
//variables POST
  $nombre=$_POST['nombre'];
  $apellido1=$_POST['apellido1'];
  $apellido2=$_POST['apellido2'];
  $email=$_POST['email'];
  $contra1=$_POST['contra1'];
  $contra2=$_POST['contra2']; 
  $telefono =$_POST['telefono'];
  $direccion=$_POST['direccion'];
  $tipo=$_POST['sele'];
 //  $lada=$_POST['lada'];
 //  $telefono=$_POST['telefono'];
 //  $estado=$_POST['estado'];
 //  $municipio=$_POST['municipio'];
 //  $colonia=$_POST['colonia'];
 //  $calle=$_POST['calle'];
 //  $numero=$_POST['numero'];
	// print("esta es tu correo electronico".$_POST['email']);
 
//registra los datos del empleados
  $sql="INSERT INTO personal (nombre,apellido1,apellido2, email,contra1,contra2,telefono,direccion,tipo) 
  VALUES ('$nombre', '$apellido1','$apellido2','$email','$contra1','$contra2','$telefono','$direccion','$tipo')";
  
  mysql_query($sql,$con) or die('Error. '.mysql_error());

 ?>