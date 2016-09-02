<html>

	<head>
	
		<title><?=$page_title_consulta?></title>
	
		<style type="text/css"> 
		body{ 
	
		background: url(https://unsplash.it/1920/1080?image=979) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	
		}
 
		h1,p{
 
		color: white;
 
		}
		
		.datos{
			
			color: white;
			
		}
				
		</style>
	
	</head>
	
	<body>
	
		<div class="container">
		
			<div class="col-md-6 col-sm-12">
			
				<h1 class="encabezado" id="encabezado_profesores"><span>Consultar Información</span></h1>
				<br>
			
			</div>
		
		</div>
		
		<center>
		
			<form name="tabla_profesor" action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/accion" method="POST">
			
				<table class="table table-striped" border="solid" align="center">
				
					<thead>
					
						<tr class="datos">
						
							<th>Seleccionar Profesor</th>
							<th>IdProfesor</th>
							<th>Apellido Paterno</th>
							<th>Apellido Materno</th>
							<th>Nombre</th>
							<th>E-Mail</th>
							<th>Password</th>
							<th>IdEscuela</th>
						
						</tr>
					
					</thead>
					
					<tbody>
					
						<h3 class="nombre_profesor"><?php foreach ($profesor as $u):?></h3>
						<tr>
						
							<td><center><input type="radio" name="editar" value="<?=$u->idProfesor?>"/></center></td>
							<td><?=$u->idProfesor?></td>
							<td><?=$u->ApPaterno?></td>
							<td><?=$u->ApMaterno?></td>
							<td><?=$u->Nombre?></td>
							<td><?=$u->email?></td>
							<td><?=$u->password?></td>
							<td><?=$u->idEscuela?></td>
						
						</tr>
						<?php endforeach;?>
					
					</tbody>
				
				</table>
				<br>
				<center><input type="submit" class="btn btn-primary btn_form" value="Editar Información"/></center>
			
			</form>
			
			<form action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/solicitoconsulta" method="POST">
			
				<br>
				
				<input type="submit" class="btn btn-primary btn_form" value="Regresar"/>
			
			</form>
		
		</center>
		
		<nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
		
			<div class="container">
			
				<div class="navbar-header">
				
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
					
						<span class="sr-only">Toggle navigation</span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
						<span class="icon-bar"></span>
					
					</button>
					
					<a class="navbar-brand" href="#">Home</a>
				
				</div>
				
				<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				
					<ul class="nav navbar-nav">
					
						<li>
							<a href="#">Escuelas</a>
						</li>
						<li>
							<a href="#">Alumnos</a>
						</li>
						<li>
							<a href="index.php/profesores/index">Profesores</a>
						</li>
						<li>
							<a href="#">Contancto</a>
						</li>
					</ul>
				
				</div>
			
			</div>
		
		</nav>
	
	</body>

</html>