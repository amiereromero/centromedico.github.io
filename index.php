<?php
session_start();
?>
<!DOCTYPE html>
<html lang="es">
	<head>
		<title>Formulario S.S</title>
		<meta charset="utf-8">
	</head>
	<body background="centromedico.jpg">
		<header><h1 align="center">CENTRO MEDICO</h1></header>
		<header><h3 align="center">Inicio Sesión</h3></header>
		<form name="f1" method="POST" action="conexion.php">
			<table align="center">
					<tr>
					<td>Usuario</td>
					<td>
						<input type="text" name="usuario" placeholder="Usuario"required >
					</td>
					</tr>
					<tr>
					<td>Contraseña</td>
					<td>
						<input type="password" name="password" placeholder="Contraseña"required >
				</tr>
				<tr>
					<td colspan="2" align="center">
						<button type="submit">Iniciar Sesión</button>
						<input type="reset" value="Borrar información">
						<a href=./registro.php><h2>Registrar</h2>
					</td>
				</tr>
			</table>

	</body>
</html>