<!DOCTYPE html>
<html class="full">
  <head>
    <meta charset="utf-8">
    <title>Projecto de euler</title>

<!-- Link de bootstrap -->

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Hoja para los estilos que estaran en todas las paginas del projecto -->
<link rel="stylesheet" href=" <?php echo base_url(); ?>css/base.css" media="screen" title="no title" charset="utf-8">
<!-- Hoja para los estilos de los distintos modulos -->
<link rel="stylesheet" href=" <?php echo base_url(); ?>css/modulos.css" media="screen" title="no title" charset="utf-8">
  </head>

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
                <h1>Projecto de Euler</h1>
            </div>
        </div>
        <!-- /.row -->
    </div>
    <!-- /.container -->


</body>
<!-- Link de js -->
<script type="text/javascript" src="<?php echo base_url();  ?>js/main.js">
</script>

<!-- Link de js de jquery -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js">
</script>

<!-- Link de js de bootstrap -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

</html>
