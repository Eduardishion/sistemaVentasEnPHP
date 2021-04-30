<?php 
	
	  $bd_host = "localhost"; 
  	  $bd_usuario = "root"; 
      $bd_password = ""; 
  	  $bd_base = "farmacia"; 
 	error_reporting (E_ALL ^ E_DEPRECATED);
	$con = mysql_connect($bd_host, $bd_usuario, $bd_password); 
	mysql_select_db($bd_base, $con); 
 ?>