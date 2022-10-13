<?php
include_once('funciones.php');

$Paciente = $_POST['Paciente'];
$Medico = $_POST['Medico'];
$Fecha = $_POST['Fecha'];
$Motivo = $_POST['Motivo'];
$Diagnostico = $_POST['Diagnostico'];
$MotivoDerivacion = $_POST['MotivoDerivacion'];

//$codigo = $_POST['codigo'];



$respuesta= guardarSolicitudDerivacion($Paciente, $Medico, $Fecha, $Motivo, $Diagnostico,$MotivoDerivacion);


echo json_encode($respuesta);

?>