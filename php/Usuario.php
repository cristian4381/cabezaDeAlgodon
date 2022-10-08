<?php
    function BuscarUsuario($usuario,$pass){
        $queryBuscar = 'SELECT * FROM usuarios WHERE usuario =? AND Contraseña=?';
        $bd = Obtenerconexion();
        $enviar = $bd->prepare($queryBuscar);
        $enviar->execute([$us,$pass]);
        $resultado=$enviar->fetchObject();

        return "true";
        /*if($resultado!=true){
            $res="false";
            return $res;
        }
        else{
            $res="true";
            return $res;
        }*/
    }
    function Obtenerconexion(){
        include_once 'conexion.php';
        $bd=$conexion;
        return $bd;
    }
?>