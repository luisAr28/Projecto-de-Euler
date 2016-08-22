<body>

  <!-- Navigation -->
  <nav class="navbar navbar-inverse navbar-fixed-bottom" role="navigation">
      <div class="container">
          <!-- Brand and toggle get grouped for better mobile display -->
          <div class="navbar-header">
              <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                  <span class="sr-only">Toggle navigation</span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
                  <span class="icon-bar"></span>
              </button>
              <a class="navbar-brand" href="#">Home</a>
          </div>
          <!-- Collect the nav links, forms, and other content for toggling -->
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
          <!-- /.navbar-collapse -->
      </div>
      <!-- /.container -->
  </nav>

  <!-- Page Content -->
  <div class="container">
      <div class="row">
          <div class="col-md-6 col-sm-12">
            <h1 class="encabezado" id="encabezado_profesores"><span>Profesor</span></h1>


          </div>
          <div class="col-md-1 col-sm-2 col-xs-2"></div>
          <div class="col-md-4 col-sm-8 col-xs-8 lista_profesores">
            <h3 class="nombre_profesor"><?php echo $profesor['Nombre']; ?></h3>
            <h5 class="nombre_profesor"><?php echo $profesor['ApPaterno']; ?></h5>
            <h5 class="nombre_profesor"><?php echo $profesor['ApMaterno']; ?></h5>
              <h5 class="nombre_profesor"><?php echo $profesor['email']; ?></h5>
            <hr>
          </div>
          <div class="col-md-1 col-sm-2 col-xs-2"></div>
      </div>
      <!-- /.row -->
  </div>
  <!-- /.container -->
</body>
