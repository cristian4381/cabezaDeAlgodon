<?php

include_once('funciones.php');

$Solicitud = $_POST['Solicitud'];
$Medico = $_POST['Medico'];
$Fecha = $_POST['Fecha'];

$respuesta=aprobarSolicitud($Solicitud,$Medico,$Fecha);


echo json_encode($respuesta);


?>