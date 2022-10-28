<?php
$link ='mysql:host=fdb27.runhosting.com;dbname=4200336_cabezadealgodon';
$usuario = '4200336_cabezadealgodon';
$password ='Lancerio10*';
 try{
    $conexion = new PDO($link,$usuario,$password,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
    /*foreach($conexion->query('SELECT * from Usuarios') as $fila) {
        print_r($fila);
    }*/
    //$mbd = null;
 }catch (PDOException $e) {
    die ("¡Error!: conexion" . $e->getMessage());
    
}
