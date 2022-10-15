<?php
include_once('funciones.php');

$Paciente = $_POST['Paciente'];
$Medico = $_POST['Medico'];
$Fecha = $_POST['Fecha'];
$Motivo = $_POST['Motivo'];
$Diagnostico = $_POST['Diagnostico'];

//$codigo = $_POST['codigo'];



$respuesta= guardarConsulta($Paciente,$Medico,$Fecha,$Motivo,$Diagnostico);


echo json_encode($respuesta);

?>