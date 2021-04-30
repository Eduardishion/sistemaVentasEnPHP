<?php 
  
include ("conec.php");
 
//variables POST
  $id_personal=$_POST['id_personal'];
  $nombre=$_POST['nombre'];
  $apellido1=$_POST['apellido1'];
  $apellido2=$_POST['apellido2'];
  $email=$_POST['email'];
  $contra1=$_POST['contra1'];
  $contra2=$_POST['contra2'];
  $telefono =$_POST['telefono'];
  $direccion=$_POST['direccion'];
  $tipo=$_POST['sele'];
 
 

  $sql="update personal set nombre='$nombre',apellido1='$apellido1', apellido2='$apellido2',email='$email',contra1='$contra1',contra2='$contra2',telefono='$telefono',direccion='$direccion',tipo='$tipo' WHERE id_personal = $id_personal ";


mysql_query($sql,$con) or die('Error. '.mysql_error());
 


 ?>

