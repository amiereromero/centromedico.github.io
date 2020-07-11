<?php
session_start();
 $usuario = "root"; 
 $password = "";  
 $servidor = "localhost"; 
 $basededatos ="miere"; 

//por si hay errors de conexion un mensaje "Error con el servidor de la Base de datos".
$conexion = mysqli_connect  ($servidor, $usuario, $password ) or die ("Error con el servidor de la Base de datos"); 


//por si hay errors de conexion un mensaje "Error al conectarse a la Base de datos".
$db = mysqli_select_db($conexion, $basededatos) or die ("Error conexion al conectarse a la Base de datos");


        //recuperar las variables
    $usuario=$_POST['usuario']; 
    $password=$_POST['password']; 
     

    //sentencia sql
    $sql="INSERT INTO alexis VALUES ('$usuario','$password')"; //manda a traer los valores de '$nombre','$correo','$mensaje'
    
    //ejecutamos la centencia de sql
    $ejecutar=mysqli_query($conexion, $sql);

   echo "<h1>DATOS REGISTRADOS</h1>";
?>﻿

<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
</head>
<body>
    <a href=./index.php>volver

</body>
</html>