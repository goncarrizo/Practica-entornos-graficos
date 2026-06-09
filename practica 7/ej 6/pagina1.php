<?php
// crear_base2.php - Ejecutar UNA SOLA VEZ
$link = mysqli_connect("localhost", "root", "")
    or die(mysqli_connect_error());

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS base2");
mysqli_select_db($link, "base2");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS alumnos (
    codigo      INT AUTO_INCREMENT PRIMARY KEY,
    nombre      VARCHAR(100),
    codigocurso INT,
    mail        VARCHAR(100)
)");

mysqli_query($link, "INSERT INTO alumnos (nombre, codigocurso, mail) VALUES
    ('Juan Perez',   1, 'juan@mail.com'),
    ('Maria Lopez',  2, 'maria@mail.com'),
    ('Carlos Ruiz',  1, 'carlos@mail.com')");

echo "Base de datos base2 creada correctamente.";
mysqli_close($link);
?>