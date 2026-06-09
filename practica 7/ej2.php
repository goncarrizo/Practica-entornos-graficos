<?php
// contador.php

$nombre_cookie = "contador";
$expiracion    = time() + (365 * 24 * 60 * 60); // 1 año

if (!isset($_COOKIE[$nombre_cookie])) {
    // Primera visita
    setcookie($nombre_cookie, 1, $expiracion);
    $visitas = 1;
    $mensaje = "Bienvenido! Es tu primera visita.";
} else {
    // Visitas siguientes
    $visitas = $_COOKIE[$nombre_cookie] + 1;
    setcookie($nombre_cookie, $visitas, $expiracion);
    $mensaje = "Ya visitaste esta pagina $visitas veces.";
}
?>
<html>
<head><title>Contador de visitas</title></head>
<body>
  <h2>Contador de visitas con Cookie</h2>
  <p><?php echo $mensaje; ?></p>
</body>
</html>