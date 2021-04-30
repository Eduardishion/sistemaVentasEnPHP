<?php 

	//scrip para mostrar datos personales del personal 
											//Configuracion de la conexion a base de datos
										include ("php/conec.php");
										   	 
										 
										//consulta todos los empleados
										  $sql=mysql_query("SELECT * FROM nuevo_producto",$con);

										/*<table style="color:#000099;width:400px;">
										  <tr style="background:#9BB;">
										    <td>Nombre</td>
										    <td>Apellido</td>
										    <td>Web</td>
										  </tr>*/

										  while($fila = mysql_fetch_array($sql)){
										  	echo "<tr>";
										    echo "<td>".$fila['id_producto']."</td>";
										    echo "<td>".$fila['codigo']."</td>";
										    echo "<td>".$fila['nombre']."</td>";
										    echo "<td>".$fila['clase']."</td>";
										    echo "<td>".$fila['marca']."</td>";
										    echo "<td>".$fila['precio']."</td>";
										    echo "<td>".$fila['registro']."</td>";
										    echo "<td>".$fila['caducidad']."</td>";
										    echo "<td>".$fila['descripcion']."</td>";
										    echo "</tr>";
										  }
								
 ?>