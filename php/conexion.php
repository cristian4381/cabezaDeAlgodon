<?php
$link ='mysql:host=localhost;dbname=asilo';
$usuario = 'root';
$password ='';
 try{
    $conexion = new PDO($link,$usuario,$password);
    /*foreach($conexion->query('SELECT * from Usuarios') as $fila) {
        print_r($fila);
    }*/
    //$mbd = null;
 }catch (PDOException $e) {
    print "¡Error!: conexion" . $e->getMessage() . "<br/>";
    die();
}