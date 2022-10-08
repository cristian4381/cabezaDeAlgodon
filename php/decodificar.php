<?php
include_once('funciones.php');
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$respuesta= BuscarUsuario($usuario,$pass);


echo json_encode($respuesta);