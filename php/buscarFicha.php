<?php
include_once('funciones.php');
$codigo = $_POST['codigo'];



$respuesta= BuscarFicha($codigo);


echo json_encode($respuesta);