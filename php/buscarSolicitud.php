<?php
include_once('funciones.php');

$solicitudes=buscarSolicitudes();

echo json_encode($solicitudes);

?>