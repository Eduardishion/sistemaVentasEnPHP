<?php 

//scrip para mostrar datos personales del personal 
											//Configuracion de la conexion a base de datos
										include ("php/conec.php");
										   	 
										  
										//consulta todos los empleados
										  $sql=mysql_query("SELECT * FROM personal",$con);

										/*<table style="color:#000099;width:400px;">
										  <tr style="background:#9BB;">
										    <td>Nombre</td>
										    <td>Apellido</td>
										    <td>Web</td>
										  </tr>*/

										  while($fila = mysql_fetch_array($sql)){
										  	echo "<tr>";
										    echo "<td>".$fila['id_personal']."</td>";
										    echo "<td>".$fila['nombre']."</td>";
										    echo "<td>".$fila['apellido1']."</td>";
										    echo "<td>".$fila['apellido2']."</td>";
										    echo "<td>".$fila['email']."</td>";
										    echo "<td>".$fila['contra1']."</td>";
										    echo "<td>".$fila['telefono']."</td>";
										    echo "<td>".$fila['direccion']."</td>";
										    echo "<td>".$fila['tipo']."</td>";
										    echo "</tr>";
										  }

 ?>