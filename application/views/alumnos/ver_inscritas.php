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
          <div class="col-md-5 col-sm-12 col-xs-12">
            <h1 class="encabezado" id="encabezado_profesores"><span>Ver Inscritas</span></h1>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1"></div>

          <div class="col-md-5 col-sm-10 col-xs-10 mostrar_universidades">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>
                    Materias
                  </th>
                </tr>
              </thead>
              <tbody>
                <?php
                //Encontrar el numero de universidades en cada pais. Pendiente :/

                  foreach ($inscritas as $inscrita) {
                    echo "<tr>";
                        echo "<td>";
                        echo $inscrita['asignatura'];
                        ?>
                        <span class="badge inscribir">

                        <a class="inscribir" href="<?php echo site_url('alumnos/eliminar_inscritas/'.$inscrita['idAsignatura']); ?>">
                        Eliminar</a>

                        </span>



                        <?php
                      echo "</td>";
                    echo "</tr>";
                  }
                 ?>
              </tbody>
            </table>
          </div>
          <div class="col-md-1 col-sm-1 col-xs-1"></div>
      </div>
      <!-- /.row -->
  </div>
  <!-- /.container -->

</body>
