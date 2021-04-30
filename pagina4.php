<?php //Inicio la sesión 
session_start(); 
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI") { 
    //si no existe, envio a la página de autentificacion 
    header("Location: entrada.php"); 
    
    //ademas salgo de este script 
    exit(); 
}

date( 'Y-m-d ');

/*$hora=time();
$detalle=getdate($hora);
print($detalle["hours"].$detalle["minutes"].$detalle["seconds"]);
*/

?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Pagina4</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/color.css">
	<link rel="stylesheet" href="css/cuad.css">
</head>
<body class="degradado">
	<header></header>
	<nav></nav>
	<div class="container-fluid  degradado">
		<div class="row">
			<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 text-center">
				<h1>Modulo de ventas realizadas</h1>
			</div>
		</div>
		<div class="row ">
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 center-block">
				
				<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right " onClick=" window.location.href='pagina6.php' ">Nueva venta</button>
				
				<?php 
				if ( $_SESSION["tipo"]=="RECEPCIONISTA") {    
				?>
				  <button type="button" class="btn btn-info glyphicon glyphicon-arrow-right " onClick=" window.location.href='pagina10.php' ">Ver menú</button>	
				<?php 
				 }else{

				?>
					<button type="button" class="btn btn-info glyphicon glyphicon-arrow-right " onClick=" window.location.href='pagina7.php' ">Ver menú</button>	

				<?php 
					 }
				 ?>
				
			   
				

				

			</div>
			<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
				
			</div>
		</div>
		
		
		
		<br />
		<div class="row">
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				
			</div>
			<div class="col-xs-10 col-sm-10 col-md-10 col-lg-10 bordes sombra-form" style=" height:500px;overflow:scroll;" >

				<table class="table table-hover table-striped table-condensed" >	
					<tr class="success">
						<td>No.venta y persona que vendió </td>
						<td>id de la venta</td>
						<td>No.venta</td>
						<td>Nombre articulo</td>
						<td>Precio</td>
						<td>Cantidad</td>
						<td>Sub-total</td>
					</tr>	

					<?php
						include ("php/conec.php");
						$consulta=mysql_query("select * from ventas");
						$numeroventa=0;
						while ($fila=mysql_fetch_array($consulta)) {
								if($numeroventa	!= $fila['no_venta']){
									echo '<td>Venta Número: '.$fila['no_venta'].' </td>';
								}
								$numeroventa=$fila['no_venta'];
								
								echo "<tr>";
											echo "<td>".$fila['nom_persona']."</td>";
											
											echo "<td>".$fila['id_venta']."</td>";
											echo "<td>".$fila['no_venta']."</td>";
										  echo "<td>".$fila['nombre']."</td>";
										  echo "<td>".$fila['precio']."</td>";
										  echo "<td>".$fila['cantidad']."</td>";
										  echo "<td>".$fila['subtotal']."</td>";
										    
							   echo "</tr>";
						}
					?>
				</table>

			</div>
			<div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
				
			</div>
		</div>
		<br /><br /><br /> 	
</body>
</html>