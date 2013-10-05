<?php
include "vista/bloques.php";
$bloques = new bloques;

?>

<!DOCTYPE html>
<!-- saved from url=(0043)http://getbootstrap.com/examples/jumbotron/ -->
<html lang="en"><script id="tinyhippos-injected">if (window.top.ripple) { window.top.ripple("bootstrap").inject(window, document); }</script><head><meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
   

    <title>Nuevo Contacto</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="css/jumbotron.css" rel="stylesheet">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>

  <body style="">

    <?php    $bloques->topmenu(); ?>

    <!-- Main jumbotron for a primary marketing message or call to action -->
   
<div class="container">
        <h1>nuevo contacto</h1>
      </div>

 <div class="container">
  <form class="form-horizontal">
<fieldset>

<!-- Form Name -->
<legend>Nuevo Contacto</legend>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="nombre">Nombre</label>
  <div class="controls">
    <input id="nombre" name="nombre" type="text" placeholder="" class="input-xlarge">
    <p class="help-block">ingresar nombre</p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="apellido">Apellido</label>
  <div class="controls">
    <input id="apellido" name="apellido" type="text" placeholder="" class="input-xlarge">
    <p class="help-block">ingresar apellido</p>
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="direccion">direccion</label>
  <div class="controls">
    <input id="direccion" name="direccion" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Text input-->
<div class="control-group">
  <label class="control-label" for="cedula">Cedula</label>
  <div class="controls">
    <input id="cedula" name="cedula" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<div class="control-group">
  <label class="control-label" for="direccion">Celular</label>
  <div class="controls">
    <input id="celular" name="celular" type="text" placeholder="" class="input-xlarge">
    
  </div>
</div>

<!-- Button -->
<div class="control-group">
  <label class="control-label" for="aceptar"></label>
  <div class="controls">
    <button id="aceptar" name="aceptar" class="btn btn-primary">aceptar</button>
  </div>
</div>

</fieldset>
</form></div>
      <hr>

      <footer>
        <p>IPARTO 2013</p>
      </footer>
    </div> <!-- /container -->


    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
  

</body></html>