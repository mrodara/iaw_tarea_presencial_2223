<?php

$host = 'localhost';
$user = '';
$pwd = '';
$db = 'tp_iaw';

$conexion = new mysqli($host, $user, $pwd, $db);

if($conexion->connect_error){
    die('Connection failed: ' .$conexion->error);
}

?>