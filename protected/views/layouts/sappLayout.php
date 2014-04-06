<!DOCTYPE html>
<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<title>Página Administrador</title>
  <link rel="stylesheet" type="text/css" href="<?php echo Yii::app()->request->baseUrl; ?>/css/bootstrap.css" />
</head>
<body>


<div class="container">
<h1><img src="<?php echo Yii::app()->request->baseUrl; ?>/images/EscudoUBB_horizontal.jpg" width="200" height="50"></h1>
    <nav class="navbar navbar-inverse" role="navigation">
  <div class="container-fluid">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
        <span class="sr-only"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">SAPP</a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav">
        <li  class="active"><a href="index.php">Practicas</a></li>
        <li ><a href="empresa.php">Empresas</a></li>
        <li><a href="bitacoras.php">Bitacoras</a></li>
        <li><a href="alumno.php">Alumnos</a></li>

      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#">Bienvenido <?php if(isset(Yii::app()->user->nombre))echo Yii::app()->user->nombre; ?></a></li>
        <li class="dropdown">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown"><span class="glyphicon glyphicon-cog"></span></a>
          <ul class="dropdown-menu">
            <li><a href="#">Editar Perfil</a></li>
            <li class="divider"></li>
            <li><a href="<?php echo Yii::app()->request->baseUrl; ?>/usuario/logout">Cerrar Sesión</a></li>
          </ul>
        </li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
	<div class="row">
		<div class="col-xs-12 col-sm-2 col-md-2">

			<ul class="nav nav-pills nav-stacked" style="max-width: 300px;">
        <li  class="active"><a href="index.php">Practicas</a></li>
        <li><a href="empresa.php">Empresas</a></li>
        <li><a href="bitacoras.php">Bitacoras</a></li>
        <li><a href="alumno.php">Alumnos</a></li>
    </ul>
		</div>
		<div class="col-xs-12 col-sm-10 col-md-10">
      <?php if(isset($content)) echo $content;else 
       echo '<div class="alert alert-danger">
                 <strong>Nos se a cargado la vista</strong> No tiene los permisos para acceder a la pagina.
              </div>';
     ?>
		</div>
	</div>
	<div class="footer" align="center" style="margin: 150px auto 0;">
		<img src="<?php echo Yii::app()->request->baseUrl; ?>/images/acreditacion 1-01.png" width="200" height="150">
	</div>
</div>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery.min.js"></script>
<script src="<?php echo Yii::app()->request->baseUrl; ?>/js/bootstrap.js"></script>
</body>
</html>