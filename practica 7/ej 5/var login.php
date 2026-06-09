<?php
// pagina2_sesion.php - Crea las variables de sesion
session_start();

$_SESSION['usuario'] = $_POST['usuario'];
$_SESSION['clave']   = $_POST['clave'];

echo "<p>Variables de sesion creadas correctamente.</p>";
echo "<p>Usuario guardado: <b>" . $_SESSION['usuario'] . "</b></p>";
echo "<br><a href='pagina3_sesion.php'>Ir a la pagina 3</a>";
?>