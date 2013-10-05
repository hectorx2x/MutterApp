<?php 

class prosesos{
	
	
pubic function informe_progreso(){
	
	 include "open_conn.php";
	$consulta ="SELECT Nombre FROM carrera c where c.id = '$carrera_id'";

?>

<div class="progress">
  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
    <span class="sr-only">40% Complete (success)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 20%">
    <span class="sr-only">20% Complete</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 60%">
    <span class="sr-only">60% Complete (warning)</span>
  </div>
</div>
<div class="progress">
  <div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="80" aria-valuemin="0" aria-valuemax="100" style="width: 80%">
    <span class="sr-only">80% Complete</span>
  </div>
</div>


<?php

}

public function insertar_contacto($nombre,$apellido,$direccion,$cedula,$centro_id_centro){

include "open_conn.php";
$consulta ="SELECT Nombre FROM carrera c where c.id = '$carrera_id'";
$consulta = "INSERT INTO  contacto (nombre, apellido, direccion, cedula, centro_id_centro) VALUES (null,$nombre,$apellido,$direccion,$cedula,$centro_id_centro)";
//INSERT INTO `sabedb`.`contacto` (`id_contacto`, `nombre`, `apellido`, `direccion`, `cordenadas`, `cedula`, `centro_id_centro`) VALUES (NULL, 'Rosa', 'Perez', 'Las palmas, sona', '8.722218, -81.768923', '9-9999', '1');

}

}


?>