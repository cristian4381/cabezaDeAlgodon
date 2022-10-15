<?php
function BuscarUsuario($us, $pass)
{
    session_start();
    $queryBuscar = 'Call buscarUsuario(?,?)';
    $bd = Obtenerconexion();
    $enviar = $bd->prepare($queryBuscar);
    $enviar->execute([$us, $pass]);

    $resultado = $enviar->fetchObject();
    if ($resultado) {
        $_SESSION["TipoUsuario"] = $resultado->TipoUsuario;
        $_SESSION["Usuario"] = $resultado->Usuario;

        return $resultado;
    }
    return $resultado;
}
function informacionUsuario($Usuario, $TipoUsuario)
{
    $queryBuscar = 'call informacionUsuario(?,?)';
    $bd = Obtenerconexion();
    $enviar = $bd->prepare($queryBuscar);
    $enviar->execute([$Usuario, $TipoUsuario]);
    $respuesta = $enviar->fetchObject();
    return $respuesta;
}

function guardarConsulta($Paciente, $Medico, $Fecha, $Motivo, $Diagnostico)
{
    $query = 'CALL guardarConsulta(?,?,?,?,?)';
    $bd = Obtenerconexion();
    $enviar = $bd->prepare($query);
    return $enviar->execute([$Paciente, $Medico, $Fecha, $Motivo, $Diagnostico]);
}
function guardarSolicitudDerivacion($Paciente, $Medico, $Fecha, $Motivo, $Diagnostico,$MotivoDerivacion)
{
    $query = 'CALL guardarSolicitudDerivacion(?,?,?,?,?,?)';
    $bd = Obtenerconexion();
    $enviar = $bd->prepare($query);
    return $enviar->execute([$Motivo, $Diagnostico, $Paciente, $Medico, $MotivoDerivacion,$Fecha]);
}
function BuscarFicha($codigo)
{
    $queryBuscar = 'Call buscarFicha(?)';
    $bd = Obtenerconexion();
    $enviar = $bd->prepare($queryBuscar);
    $enviar->execute([$codigo]);
    return $enviar->fetchObject();
}
function BuscarPaciente($codigo)
{
    $queryBuscar = 'Call buscarPaciente(?)';
    $bd = Obtenerconexion();
    $enviar = $bd->prepare($queryBuscar);
    $enviar->execute([$codigo]);
    return $enviar->fetchObject();
}
function Obtenerconexion()
{
    include_once 'conexion.php';
    $bd = $conexion;
    return $bd;
}
