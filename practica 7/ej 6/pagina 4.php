<?php
// cerrar.php
session_start();
session_destroy();
echo "<p>Sesion cerrada.</p>";
echo "<a href='buscar_alumno.php'>Volver</a>";
?>