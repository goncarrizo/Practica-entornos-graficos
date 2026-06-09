<?php
// contador_sesion.php
// Este archivo se incluye en cada pagina que se quiera contabilizar

session_start();

// Si la variable no existe, la inicializa en 0
if (!isset($_SESSION['paginas_visitadas'])) {
    $_SESSION['paginas_visitadas'] = 0;
}

// Incrementa el contador en cada visita
$_SESSION['paginas_visitadas']++;

echo "<p>Paginas visitadas en esta sesion: <b>" 
     . $_SESSION['paginas_visitadas'] . "</b></p>";
?>