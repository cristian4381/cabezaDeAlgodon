<?php
include_once('funciones.php');
session_start();


$respuesta = informacionUsuario($_SESSION["Usuario"],$_SESSION["TipoUsuario"]);

echo json_encode($respuesta);


/*
$Data=array("Usuario"=>$_SESSION["Usuario"],"TipoUsuario:"=>$_SESSION["TipoUsuario"]);

 echo json_encode($Data);

/*
if($_SESSION["Usuario"]){
    if($_SESSION["TipoUsuario"]=="Medico"){
        header("Location:../template/VistaMedicoGeneral.php");
    }
    if($_SESSION["TipoUsuario"]=="Medico Especialista"){
        header("Location:../template/Visita.php");
    }
    else{
        print "<h1>No se encontro Modulo Asignado a este usuario</h1>";
    }
}
else{
    header("Location:../index.html");
}*/
//header("Location:../index.html");
/*
if(isset($_SESSION["S_Usuario"]) == true){
    echo json_encode('true');
}
else{
    echo json_encode('error');
}*/

?>