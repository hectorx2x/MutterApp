<?php
/**
* 
*/
class bloques{
	
public function topmenu(){
?>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">IPARTO</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="informe.php">INFORMES</a></li>
            <li><a href="seguimiento.php">SEGIMIENTOS</a></li>
            <li><a href="nuevocontacto.php">NUEVO CONTACTO</a></li>
            <li><a href="contactar.php">CONTACTAR</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<?php

}

public function maptopmenu(){
?>

    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
var markers = [];

function initialize() {
  var haightAshbury = new google.maps.LatLng(8.722218, -81.768923);
  var haightAshbury2 = new google.maps.LatLng(8.559294,-81.453066);

  var mapOptions = {
    zoom: 9,
    center: haightAshbury,
     panControl: true,
    zoomControl: true,
    scaleControl: true,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  var map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);



var contentString = '<div id="content">'+
      '<div id="siteNotice">'+
      '</div>'+
      '<h1 id="firstHeading" class="firstHeading">alerta roja</h1>'+
      '<div id="bodyContent">'+
      '<p>nombre: Rosa perez </br> cel: 6111111 </br> meses: 5 </p>'+
      '</div>'+
      '</div>';

  var infowindow = new google.maps.InfoWindow({
      content: contentString
  });


var marker = new google.maps.Marker({
    position: haightAshbury,
    map: map
  });
 google.maps.event.addListener(marker, 'click', function() {
   infowindow.open(map,marker);
  });
}

google.maps.event.addDomListener(window, 'load', initialize);




    </script>

<div class="navbar navbar-inverse navbar-fixed-top">
      <div class="container">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php">IPARTO</a>
        </div>
        <div class="collapse navbar-collapse">
          <ul class="nav navbar-nav">
            <li class="active"><a href="informe.php">INFORMES</a></li>
            <li><a href="seguimiento.php">SEGIMIENTOS</a></li>
            <li><a href="nuevousuario.php">NUEVO PACIENTE</a></li>
            <li><a href="nuevocontacto.php">NUEVO CONTACTO</a></li>
            <li><a href="contactar.php">CONTACTAR</a></li>
          </ul>
        </div><!--/.nav-collapse -->
      </div>
    </div>

<?php

}

public function home_header(){
	?>

<!DOCTYPE html>
<html>
  <head>
    <title>SPARIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
     <style>
      html, body, #map-canvas {
        margin: 0;
        padding: 0;
        height: 100%;
      }
    </style>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script>
var map;
function initialize() {
  var mapOptions = {
    zoom: 9,
    center: new google.maps.LatLng(8.722218, -81.768923),
    mapTypeId: google.maps.MapTypeId.ROADMAP
  };
  map = new google.maps.Map(document.getElementById('map-canvas'),
      mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

    </script>
  </head>
  <body>



<?php
}

public function header(){ ?>

<!DOCTYPE html>
<html>
  <head>
    <title>SPARIO</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet" media="screen">

    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="../../assets/js/html5shiv.js"></script>
      <script src="../../assets/js/respond.min.js"></script>
    <![endif]-->
  </head>
  <body>


<?php }

}// fin de la clase


   ?>