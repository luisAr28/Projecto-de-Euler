<html>
	<head>
	<title><?=$page_title?></title>
	</head>
	<body>
		<form name="tabla" action="http://localhost/Projecto-de-Euler/Profesor_controller/buscaDis" method="POST">
		<table border="solid">
		<thead>
		<tr>
		
			<th>Materia</th>
			<th>Ocupabilidad</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($usuarios as $u):?>
		
		<tr>
		
		<td><?=$u->asignatura?></td>
		<td><?=$u->Ocupabilidad?></td>
		</tr>
		
		<?php endforeach;?>
		</tbody>
		</table>
		<input type="submit" value="Editar"/>
		</form>
			
	</body>
</html>