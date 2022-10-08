<?php
    function BuscarUsuario($us,$pass){
        session_start();
        $queryBuscar = 'SELECT * FROM Usuarios WHERE usuario =? AND Contrasña=?';
        $bd = Obtenerconexion();
        $enviar = $bd->prepare($queryBuscar);
        $enviar->execute([$us,$pass]);

        $resultado=$enviar->fetchObject();
        
       if($resultado!=true){
            $respuesta="false";
            return $respuesta;
            $_SESSION["S_Usuario"] = null;
        }
        else {
            $respuesta="true";
            
            $_SESSION["S_Usuario"]=$resultado->Nombre;
            return $respuesta;

        }
    }
    function BuscarFicha($codigo){
        $queryBuscar = 'Call buscarFicha(?)';
        $bd = Obtenerconexion();
        $enviar = $bd->prepare($queryBuscar);
        $enviar->execute([$codigo]);

        return $resultado=$enviar->fetchObject();
    }
    function BuscarPaciente($codigo){
        $queryBuscar = 'Call buscarPaciente(?)';
        $bd = Obtenerconexion();
        $enviar = $bd->prepare($queryBuscar);
        $enviar->execute([$codigo]);

        return $resultado=$enviar->fetchObject();
    }
    function Obtenerconexion(){
        include_once 'conexion.php';
        $bd=$conexion;
        return $bd;
        
    }

?>

