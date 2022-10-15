<?php
include_once('funciones.php');
$usuario = $_POST['usuario'];
$pass = $_POST['pass'];


$resultado= BuscarUsuario($usuario,$pass);
/*
if($resultado){
    $tipoUsuario="Medico";
    if($resultado->TipoUsuario == "Medico"){
        //echo json_encode("se ingreso al if");
        //echo "<script>console.log('si entra al if: ' );</script>";
       $res=informacionMedico($usuario);

       
    }
    
}
else{
    
}
*/

echo json_encode($resultado);


?>