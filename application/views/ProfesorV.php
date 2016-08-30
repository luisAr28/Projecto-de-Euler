<html>
	<head>
	<title><?=$page_title?></title>
	</head>
	<body>
		<form name="tabla" action="" method="POST">
		<table border="solid">
		<thead>
		<tr>
			<th></th>
			<th>Nombre</th>
			<th>Apellido</th>
			<th>Escuela</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($usuarios as $u):?>
		
		<tr>
		<td><input type="radio" name="editar" value="<?=$u->idProfesor?>"/></td>
		<td><?=$u->Nombre?></td>
		<td><?=$u->ApPaterno?></td>
		<td><?=$u->idEscuela?></td>
		</tr>
		
		<?php endforeach;?>
		</tbody>
		</table>
		<input type="submit" value="Editar"/>
		</form>
			
	</body>
</html>