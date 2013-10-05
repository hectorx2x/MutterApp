<?php
include "vista/bloques.php";
$bloques = new bloques;

?>

  	<?php

   $bloques->home_header();

   $bloques->maptopmenu();

   ?>
    <h1></h1>


 <div id="map-canvas"></div>
    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="//code.jquery.com/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
  </body>
</html>