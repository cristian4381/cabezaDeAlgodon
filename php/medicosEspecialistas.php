<?php
include_once('funciones.php');

$medicos=medicosEspecialistas();

echo json_encode($medicos);

?>