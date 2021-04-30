<?php 

include ("conec.php");

$id_personal=$_POST['id_personal'];

$sql="delete from personal  WHERE id_personal = $id_personal ";

mysql_query($sql,$con) or die('Error. '.mysql_error());
 ?>