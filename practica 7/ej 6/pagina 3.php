<?php
// bienvenida.php - Verifica la sesion y da bienvenida
session_start();

if (isset($_SESSION['nombre'])) {
    echo "<h2>Bienvenido, " . $_SESSION['nombre'] . "!</h2>";
    echo "<p>Acceso permitido.</p>";
    echo "<a href='cerrar.php'>Cerrar sesion</a>";
} else {
    echo "<h2>Acceso denegado</h2>";
    echo "<p>No puede visitar esta pagina sin iniciar sesion.</p>";
    echo "<a href='buscar_alumno.php'>Ir al formulario</a>";
}
?>