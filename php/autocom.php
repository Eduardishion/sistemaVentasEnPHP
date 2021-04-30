<?php 
 
  /*datos de la base sa datos para conectarla*/
  include ("php/conec.php");

	$sql = "SELECT nombre FROM nuevo_producto order by nombre";//sentencia a ejecutar
	$res = mysql_query($sql);
	$arreglo_php = array();
	if(mysql_num_rows($res)==0)
   		array_push($arreglo_php, "No hay datos");
	else{
  		while($palabras = mysql_fetch_array($res)){
    		array_push($arreglo_php, $palabras["nombre"]);
  		}
	}

  mysql_query($sql,$con) or die('Error. '.mysql_error());
?>