<html>
	<head>
	<title><?=$page_title?></title>
	</head>
	<body>
		<form name="tabla" action="http://localhost/Projecto-de-Euler/Profesor_controller/buscaTuto" method="POST">
		<table border="solid">
		<thead>
		<tr>
		
			<th>Nombre</th>
			<th>A. Paterno</th>
			<th>A. Materno</th>
			<th>Escuela Origen</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($usuarios as $u):?>
		
		<tr>
		
		<td><?=$u->Nombre?></td>
		<td><?=$u->ApPaterno?></td>
		<td><?=$u->ApMaterno?></td>
		<td><?=$u->Escuela?></td>
		</tr>
		
		<?php endforeach;?>
		</tbody>
		</table>
		<input type="submit" value="Editar"/>
		</form>
			
	</body>
</html>