<?php
// cerrar_sesion.php
session_start();
session_destroy();
echo "<p>Sesion cerrada. El contador se reinicio.</p>";
echo "<a href='pagina1.php'>Volver al inicio</a>";
?>