<?php
include_once('funciones.php');
$codigo = $_POST['codigo'];



$respuesta= BuscarPaciente($codigo);


echo json_encode($respuesta);