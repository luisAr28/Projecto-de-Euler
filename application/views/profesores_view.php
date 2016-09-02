<html>

 <head>
 <title><?=$page_title?></title>
 
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
		
			<h1 class="encabezado" id="encabezado_profesores"><span>Profesores</span></h1>
			<br>
		
		</div>
	
	</div>
	
	<!--<form name="tabla_profesores" action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/accion" method="POST">
	
		<table border="solid" align="center">
		
			<thead>
			
				<tr>
					<th>Seleccionar Profesor</th>
					<th>IdProfesor</th>
					<th>Apellido Paterno</th>
					<th>Apellido Materno</th>
					<th>Nombre</th>
					<th>E-Mail</th>
					<th>Password</th>
					<th>IdEscuela</th>
					<th>Estado</th>
				</tr>
			
			</thead>
			
			<tbody>
			
				<//?php foreach ($profesores as $u):?>
				
					<tr>
					
						<td><center><input type="radio" name="editar" value="<//?=$u->idProfesor?>"/></center></td>
						
						<td><//?=$u->idProfesor?></td>
						<td><//?=$u->ApPaterno?></td>
						<td><//?=$u->ApMaterno?></td>
						<td><//?=$u->Nombre?></td>
						<td><//?=$u->email?></td>
						<td><//?=$u->password?></td>
						<td><//?=$u->idEscuela?></td>
						<td><//?=$u->Estado?></td>
					
					</tr>
				
				<//?php endforeach;?>
			
			</tbody>
		
		</table>
	
	<br>
	<center><input type="submit" value="Editar"/></center>
	
	</form>-->
	
	<!--<center><form name="altaprofe" action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/alta" method="POST">

		<table>
		
			<tr>
				<td>id_Profesor:</td>
				<td><input type="text" name="txtIdProfesor"/></td>
			</tr>
			
			<tr>
				<td>Apellido Paterno:</td>
				<td><input type="text" name="txtApPat"/></td>
			</tr>
			
			<tr>
				<td>Apellido Materno:</td>
				<td><input type="text" name="txtApMat"/></td>
			</tr>
			
			<tr>
				<td>Nombre:</td>
				<td><input type="text" name="txtNombre"/></td>
			</tr>
			
			<tr>
				<td>E-mail:</td>
				<td><input type="text" name="txtCorreo"/></td>
			</tr>
			
			<tr>
				<td>Contraseña:</td>
				<td><input type="text" name="txtContra"/></td>
			</tr>
			
			<tr>
				<td>id_Escuela:</td>
				<td><input type="text" name="txtIdEscuela"/></td>
			</tr>
		
		</table>
		
		<br>
		<input type="submit" value="Alta"/>
	
	</form></center>-->
	
	<center><form action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/solicitoalta" method="POST">
			
				<br>
				<input type="submit" class="btn btn-primary btn_form" value="Alta Profesor"/>
			
	</form></center>
	
	<center><form action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/solicitobaja" method="POST">
			
				<br>
				<input type="submit" class="btn btn-primary btn_form" value="Baja Profesor"/>
			
	</form></center>
	
	<center><form action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/solicitoconsulta" method="POST">
			
				<br>
				<input type="submit" class="btn btn-primary btn_form" value="Consultar Profesor"/>
			
	</form></center>
	
	<br>
	
	<!--<center><form name="bajaprofe" action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/baja" method="POST">
	
		<table>
		
			<tr>
			
				<td>IdProfesor:</td>
				<td><input type="text" name="txtIdProfesor"></td>
			
			</tr>
		
		</table>
		
		<br>
		<input type="submit" value="Borrar"/>
		<br><br>
	
	</form></center>-->
	
	<!--<center><form name="consultaprofe" action="http://localhost:8080/profesores/CRUD/index.php/mantenimiento/selectinfo" method="POST">
	
		<table>
		
			<tr>
			
				<td>IdProfesor:</td>
				<td><input type="text" name="txtIdProfesor"></td>
			
			</tr>
		
		</table>
		
		<br>
		<input type="submit" value="Consultar"/>
		<br><br>
	
	</form></center>-->
	
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