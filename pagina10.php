<?php //Inicio la sesión 
session_start(); 
//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI") { 
    //si no existe, envio a la página de autentificacion 
    header("Location: entrada.php"); 
    
    //ademas salgo de este script 
    exit(); 
}
?>
<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Panel</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/cuad.css">
    <link rel="stylesheet" href="css/color.css">
</head>
<body >
	<div class="container-fluid degradado">

	<div class="row">
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            
        </div>
		<div class="col-xs-4 col-sm-4 col-md-4 col-lg-4 text-center">
			<br />
			<br />
			<h1>Menú de navegación</h1>
           <?php 
             
            /*buen lugar para colocar fromularios*/       
            
            echo '<p class="alert alert-info ">'.'Bienvenido:'.$_SESSION["nombre"].' elige una opcion por favor'.'</p>';
            ?>
            
            <a href="php/salida.php" class="alert alert-danger" >Cerrar sesión</a> 
        
            
		</div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            
        </div>
	</div>
	<div class="row">
        <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            
        </div>
		<div class="col-xs-8 col-sm-8 col-md-8 col-lg-8 center-block ">
        	<nav id="menu" >
            	<br />
            	<br />
            	<ul >
                    
                    <li><a href="pagina6.php">
                        <div id="icono4"></div>
                        Generar venta
                    </a></li>
                    <li><a href="pagina4.php">
                        <div id="icono2"></div>
                        Ventas realizadas
                    </a></li>
                    <li><a href="pagina5.php">
                        <div id="icono5"></div>
                        Inventario
                    </a></li> 
                    
                    
                </ul>
            </nav>
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
        <br />
	   </div>
       <div class="col-xs-2 col-sm-2 col-md-2 col-lg-2">
            
        </div>
     </div>  



	
</body>
</html>