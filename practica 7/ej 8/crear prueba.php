<?php
// crear_prueba.php - Ejecutar UNA SOLA VEZ
$link = mysqli_connect("localhost", "root", "")
    or die(mysqli_connect_error());

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS prueba");
mysqli_select_db($link, "prueba");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS buscador (
    id       INT AUTO_INCREMENT PRIMARY KEY,
    canciones VARCHAR(200)
)");

mysqli_query($link, "INSERT INTO buscador (canciones) VALUES
    ('Bohemian Rhapsody - Queen'),
    ('Smells Like Teen Spirit - Nirvana'),
    ('Hotel California - Eagles'),
    ('Imagine - John Lennon'),
    ('Stairway to Heaven - Led Zeppelin'),
    ('Yesterday - Beatles'),
    ('Come As You Are - Nirvana'),
    ('Nothing Else Matters - Metallica')");

echo "Base de datos prueba creada.";
mysqli_close($link);
?>