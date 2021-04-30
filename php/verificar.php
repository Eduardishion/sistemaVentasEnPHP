<?php 

 /*$usuario= $_POST['usuario'];
 $contraseña=$_POST['contraseña'];*/

 //Configuracion de la conexion a base de datos
 include ("conec.php"); 

$contra=$_POST['contra'];
$usu=$_POST['usu'];
//$tipo=$_POST['op'];


//Sentencia SQL para buscar un usuario con esos datos 
         
$ssql = "SELECT * FROM personal WHERE nombre='$usu' and contra1='$contra' and tipo='Administrador'";
$ssql2 = "SELECT * FROM personal WHERE nombre='$usu' and contra1='$contra' and tipo='Recepcionista'";

//Ejecuto la sentencia 
$rs = mysql_query($ssql,$con); 
$rs2 = mysql_query($ssql2,$con); 

if (mysql_num_rows($rs)!=0){ 
    //usuario y contraseña válidos 
    //defino una sesion y guardo datos 
    session_start(); 
    $_SESSION["autentificado"]="SI";
    $_SESSION["nombre"]=$_POST['usu'];
    $_SESSION["tipo"]="ADMINISTRADOR";
    header ("Location: ../pagina7.php"); 

    //header ("Location: ../pagina10.php"); 
}elseif(mysql_num_rows($rs2)!=0){

    session_start(); 
    $_SESSION["autentificado"]="SI";
    $_SESSION["nombre"]=$_POST['usu'];
    $_SESSION["tipo"]="RECEPCIONISTA";
    header ("Location: ../pagina10.php"); 
    //header("Location: ../entrada.php?errorusuario=si"); 
}else{
    header("Location: ../entrada.php?errorusuario=si"); 
}
mysql_free_result($rs); 
mysql_close($con); 


/* //vemos si el usuario y contraseña es váildo 
if ($usuario=="lalo" && $contraseña=="casa"){ 
    //usuario y contraseña válidos 
    //defino una sesion y guardo datos 
    //
  
    session_start(); 
    $_SESSION["autentificado"]= "SI";
    header ("Location: ../pagina7.php");

    if ($usuario=="juan") {
      header ("Location: ../pagina7.html");
    }else{
      if ($usuario=="lalo") {
        header ("Location: ../pagina2.html");
      }
    }
    

}else { 
    //si no existe le mando otra vez a la portada 
    header("Location: ../entrada.php?errorusuario=si"); 
} 
*/
 ?>
