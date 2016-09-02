<html>

	<head>
		<title>Alta Profesor - Movilidad</title>
		
	<style type="text/css"> 
	body{ 
	
		background: url(https://unsplash.it/1920/1080?image=979) no-repeat center center fixed;
		-webkit-background-size: cover;
		-moz-background-size: cover;
		-o-background-size: cover;
		background-size: cover;
	
	}
 
	h1,p {
 
		color: white;
 
	}
	</style>		
		
	</head>
	
	<body>
	
		<div class="container">
		
			<div class="col-md-6 col-sm-12">
			
				<h1 class="encabezado" id="encabezado_profesores"><span>Alta Profesor</span></h1>
				<br>
			
			</div>
		
		</div>
		
		<center><form name="altaprofe" action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/alta" method="POST">
		
		<table>
		
			<tr>
				<td><label class="label_form">id_Profesor:</label></td>
				<td><input type="text" class="form-control" name="txtIdProfesor"/></td>
			</tr>
			
			<tr>
				<td><label class="label_form">Apellido Paterno:</label></td>
				<td><input type="text" class="form-control" name="txtApPat"/></td>
			</tr>
			
			<tr>
				<td><label class="label_form">Apellido Materno:</label></td>
				<td><input type="text" class="form-control" name="txtApMat"/></td>
			</tr>
			
			<tr>
				<td><label class="label_form">Nombre:</label></td>
				<td><input type="text" class="form-control" name="txtNombre"/></td>
			</tr>
			
			<tr>
				<td><label class="label_form">E-mail:</label></td>
				<td><input type="text" class="form-control" name="txtCorreo"/></td>
			</tr>
			
			<tr>
				<td><label class="label_form">Contraseña:</label></td>
				<td><input type="text" class="form-control" name="txtContra"/></td>
			</tr>
			
			<tr>
				<td><label class="label_form">id_Escuela:</label></td>
				<td><input type="text" class="form-control" name="txtIdEscuela"/></td>
			</tr>
		
		</table>
		
		<br>
		<input type="submit" class="btn btn-primary btn_form" value="Alta"/>
	
		</form>
		
		<!--<form action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/" method="POST">
		
			<br>
			<input type="submit" value="Volver"/>
		
		</form>--></center>
		
		<br><br>
		
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