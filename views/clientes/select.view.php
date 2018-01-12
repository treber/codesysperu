<!DOCTYPE html>
<html lang="es">
<head>
	<meta charset="UTF-8">
	<title>Proyecto15-Clientes</title>
</head>
<body>
	<h1>Clientes</h1>
	<table border="1">
		<thead>
			<tr>
				<th>Id</th>
				<th>Nombre</th>
				<th>Apellidos</th>
				<th>E-mail</th>
				<th>Teléfono</th>
				<th>Comentario</th>
			</tr>
		</thead>
		<tbody>
			<?php foreach ($clientes as $cliente): ?>
				<tr>
					<td><?= $cliente->id ?></td> <!--es lo mismo que el echo de php-->
					<td><?= $cliente->nombre ?></td>
					<td><?= $cliente->apellidos ?></td>
					<td><?= $cliente->correo ?></td>
					<td><?= $cliente->telefono ?></td>
					<td><?= $cliente->comentario ?></td>
				</tr>
			<?php endforeach; ?> <!-- es opcional la coma y punto -->
		</tbody>

	</table>
</body>
</html>