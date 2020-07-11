<!DOCTYPE html>
<html lang="en">
<head>
 <title>Registrar Usuario</title>
 <meta charset = "utf-8">
</head>
<body background="centromedico.jpg">

	<header><h1 align="center">Registro</h1></header>

		<header><h3 align="center">Ingrese datos</h3></header>

		<form action="base.php" method="post">
			<table align="center">
					<tr>
					<td>Nombres</td>
					<td>
						<input type="text" name="nombre" placeholder="nombre"required >
					</td>
					</tr>
					<tr>
					<td>Apellidos</td>
					<td>
						<input type="text" name="apellido" placeholder="apellido"required >
					</td>
					</tr>
				
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
						<button type="submit">registrar</button>
						<input type="reset" value="Borrar información">
						<a href=./index.php><h2>Volver</h2>
					</td>
				</tr>
			</table>
 </body>
</html>