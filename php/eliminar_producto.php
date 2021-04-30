<?php 

include ("conec.php");

$id_producto=$_POST['id_producto'];

$sql="delete from nuevo_producto  WHERE id_producto = $id_producto ";

mysql_query($sql,$con) or die('Error. '.mysql_error());
 ?>