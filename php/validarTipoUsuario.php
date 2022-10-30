<?php
session_start();


if($_SESSION["Usuario"]){
    if($_SESSION["TipoUsuario"]=="Medico"){
        header("Location:../template/VistaMedicoGeneral.php");
    }
    if($_SESSION["TipoUsuario"]=="Medico Especialista"){
        header("Location:../template/Visita.php");
    }
    if($_SESSION["TipoUsuario"]=="Fundación "){
        header("Location:../template/moduloFundacion.php");
    }
    else{
        print "<h1>No se encontro Modulo Asignado a este usuario</h1>";
    }
}
else{
    header("Location:../index.html");
}
?>