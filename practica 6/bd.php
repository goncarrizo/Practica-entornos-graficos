<?php
// db.php - Configuracion de conexion

$servidor  = "localhost";
$usuario   = "root";
$password  = "";
$basedatos = "Capitales";

$link = mysqli_connect($servidor, $usuario, $password)
    or die("Error al conectar: " . mysqli_error($link));

mysqli_select_db($link, $basedatos)
    or die("Error al seleccionar la BD: " . mysqli_error($link));
?>