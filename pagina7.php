<?php 
//Inicio la sesión 
session_start(); 

//COMPRUEBA QUE EL USUARIO ESTA AUTENTIFICADO 
if ($_SESSION["autentificado"] != "SI") { 
    //si no existe, envió a la página de autentificacion 
    header("Location: entrada.php"); 
    //ademas salgo de este script 
    exit(); 


}elseif( $_SESSION["tipo"]=="RECEPCIONISTA"){
    header("Location: advertencia.php"); 
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
             
                /*buen lugar para colocar formularios*/       
                echo '<p class="alert alert-info ">'.'Bienvenido:'.$_SESSION["nombre"].' elige una opción por favor'.'</p>';
            ?>
            <a href="php/salida.php" class="alert alert-danger" >Cerrar sesión</a> 
        
		</div>
        <div class="col-xs-4 col-sm-4 col-md-4 col-lg-4">
            
        </div>
	</div>
	<div class="row">
        <!-- <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div> -->
		<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12 ">
        	<nav id="menu" >
            	<br />
            	<br />
            	<ul >
                    <li><a href="pagina2.php">
                        <div id="icono3"></div>
                        Registrar usuario
                    </a></li>
                	<li><a href="pagina3.php">
                    	<div id="icono1"></div>
                    	Registrar producto
                    </a></li>
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
        <!-- <div class="col-xs-1 col-sm-1 col-md-1 col-lg-1">
            
        </div> -->
    </div>   



	
</body>
</html>