<?php
$link ='mysql:host=localhost;dbname=asilo';
$usuario = 'root';
$password ='';
 try{
    $conexion = new PDO($link,$usuario,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    /*foreach($conexion->query('SELECT * from Usuarios') as $fila) {
        print_r($fila);
    }*/
    //$mbd = null;
 }catch (PDOException $e) {
    die ("¡Error!: conexion" . $e->getMessage());
    
}
