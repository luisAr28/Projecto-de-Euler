<html>
	<head>
	<title><?=$page_title?></title>
	</head>
	<body>
		<form name="tabla" action="" method="POST">
		<table border="solid">
		<thead>
		<tr>
		
			<th>Id</th>
			<th>Materia</th>
		</tr>
		</thead>
		<tbody>
		<?php foreach ($usuarios as $u):?>
		
		<tr>
		
		<td><?=$u->idAsignatura?></td>
		<td><?=$u->asignatura?></td>
		</tr>
		
		<?php endforeach;?>
		</tbody>
		</table>

		</form>

			
	</body>
</html>