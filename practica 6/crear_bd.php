<?php
// crear_bd.php - Ejecutar UNA SOLA VEZ para crear la BD y cargar datos

$servidor = "localhost";
$usuario  = "root";
$password = "";

$link = mysqli_connect($servidor, $usuario, $password)
    or die("Error al conectar: " . mysqli_connect_error());

// Crear la base de datos
mysqli_query($link, "CREATE DATABASE IF NOT EXISTS Capitales")
    or die(mysqli_error($link));

mysqli_select_db($link, "Capitales")
    or die(mysqli_error($link));

// Crear la tabla
$sql = "CREATE TABLE IF NOT EXISTS Ciudades (
    id          INT AUTO_INCREMENT PRIMARY KEY,
    ciudad      VARCHAR(100) NOT NULL,
    pais        VARCHAR(100) NOT NULL,
    habitantes  INT,
    superficie  DECIMAL(10,2),
    tieneMetro  TINYINT(1)
)";
mysqli_query($link, $sql) or die(mysqli_error($link));

// Insertar datos iniciales
$datos = "INSERT INTO Ciudades (ciudad, pais, habitantes, superficie, tieneMetro) VALUES
('Mexico D.F.', 'Mexico',    555666, 23434.34, 1),
('Barcelona',   'Espana',    444333, 1111.11,  0),
('Buenos Aires','Argentina', 888111, 333.33,   1),
('Medellin',    'Colombia',  999222, 888.88,   0),
('Lima',        'Peru',      999111, 222.22,   0),
('Caracas',     'Venezuela', 111222, 111.11,   1),
('Santiago',    'Chile',     777666, 222.22,   1),
('Antigua',     'Guatemala', 444222, 877.33,   0),
('Quito',       'Ecuador',   333111, 999.11,   1),
('La Habana',   'Cuba',      111222, 333.11,   0)";

mysqli_query($link, $datos) or die(mysqli_error($link));

echo "Base de datos y tabla creadas correctamente.";
mysqli_close($link);
?>