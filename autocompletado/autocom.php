<?php 
  /*datos de la base sa datos para conectarla*/
  $bd_host = "localhost"; 
  $bd_usuario = "root"; 
  $bd_password = "12345"; 
  $bd_base = "datos"; 

  $con = mysql_connect($bd_host, $bd_usuario, $bd_password); //para hacer la conexion pasando los parametros enterioes
  mysql_select_db($bd_base, $con); //seleccion de la basa de datos 


	$sql = "SELECT clase FROM nuevo_producto order by clase";//sentencia a ejecutar
	$res = mysql_query($sql);
	$arreglo_php = array();
	if(mysql_num_rows($res)==0)
   		array_push($arreglo_php, "No hay datos");
	else{
  		while($palabras = mysql_fetch_array($res)){
    		array_push($arreglo_php, $palabras["clase"]);
  		}
	}

  mysql_query($sql,$con) or die('Error. '.mysql_error());
?>