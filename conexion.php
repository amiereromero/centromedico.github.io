<?php
session_start();

$conexion=mysqli_connect('localhost', 'root', '', 'miere') or die ("No se pudo conectar a la base de datos". mysqli_error($conexion));

$nombre = $_POST["usuario"];
$password = $_POST["password"];

$query = mysqli_query($conexion,"SELECT * FROM alexis WHERE usuario = '".$nombre."' and password = '".$password."'");
$nr = mysqli_num_rows($query);

if($nr == 1)
{   if ($_POST["usuario"] && $_POST["password"]){

 session_start();
 $_SESSION["autentificado"]= "SI";
 header ("Location: bienvenida.php"); 
}else {
 //si no existe le mando otra vez a la portada
 header("Location: index.php");
}
	header("location: ./bienvenida.php");
	echo "Bienvenido:" .$nombre;
}
else if ($nr == 0) 
{
	header("Location: ./");
	//echo "No ingreso"; 
}
	
?>

<?php

//si los datos son correctos

?>


