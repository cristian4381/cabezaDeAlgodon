<?php
session_start();


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
}
//header("Location:../index.html");
/*
if(isset($_SESSION["S_Usuario"]) == true){
    echo json_encode('true');
}
else{
    echo json_encode('error');
}*/

?>