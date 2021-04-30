<!doctype html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Autocompletar</title>
	<!--El componente autocomplete requiere un array, por lo que simplemente tomaremos la información de nuestra tabla y la pasaremos de un arreglo php a un arreglo javascript. Primero lo básico, los archivos javascript necesarios
	IMPORTANTE: Recordemos siempre que podemos disponer de las versiones más actuales de jQuery y jQuery UI
	-->
	<script src="../js/jquery-1.11.1.min.js"></script>
	<script src="../js/jquery-ui-1.10.4.custom.min.js"></script>
	<script type="text/javascript">
		$(document).ready(function() {
			var autocompletar = new Array();//Esto es un poco de php para obtener lo que necesitamos
	    	<?php 
	    		  include "autocom.php" ;
	     		  for($p = 0;$p < count($arreglo_php); $p++){ 
	     		  //usamos count para saber cuantos elementos hay 
	     	?>
       				autocompletar.push('<?php echo $arreglo_php[$p]; ?>');
	     	<?php } 
	     	?>
			$("#completar").autocomplete({//Usamos el ID de la caja de texto donde lo queremos
      			source: autocompletar //Le decimos que nuestra fuente es el arreglo
     		});
		});	
	</script>
</head>
<body>
	<label for="completar">Escribe tu articulo</label>
	<form id="consulta">
		<input type="text" id="completar">
	</form>
	
</body>
</html>