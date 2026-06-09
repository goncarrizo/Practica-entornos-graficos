<?php
// baja.php - Baja de ciudad
include 'db.php';

$id = (int)$_GET['id'];

mysqli_query($link, "DELETE FROM Ciudades WHERE id=$id")
    or die(mysqli_error($link));

echo "<p>Ciudad eliminada correctamente.</p>";
echo "<a href='listar.php'>Ver listado</a>";

mysqli_close($link);
?>