<?php
// crear_compras.php - Ejecutar UNA SOLA VEZ
$link = mysqli_connect("localhost", "root", "")
    or die(mysqli_connect_error());

mysqli_query($link, "CREATE DATABASE IF NOT EXISTS Compras");
mysqli_select_db($link, "Compras");

mysqli_query($link, "CREATE TABLE IF NOT EXISTS catalogo (
    id      INT AUTO_INCREMENT PRIMARY KEY,
    producto VARCHAR(100),
    precio  DECIMAL(9,2)
)");

mysqli_query($link, "INSERT INTO catalogo (producto, precio) VALUES
    ('Notebook',  85000.00),
    ('Mouse',      1500.00),
    ('Teclado',    3200.00),
    ('Monitor',   45000.00),
    ('Auriculares', 5500.00)");

echo "Base de datos Compras creada.";
mysqli_close($link);
?>