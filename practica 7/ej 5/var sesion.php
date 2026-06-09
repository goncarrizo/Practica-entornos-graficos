<?php
// pagina3_sesion.php - Recupera las variables de sesion
session_start();
?>
<html>
<head><title>Sesion activa</title></head>
<body>
  <h2>Datos de la sesion</h2>
  <?php if (isset($_SESSION['usuario'])) { ?>
    <p>Usuario: <b><?php echo $_SESSION['usuario']; ?></b></p>
    <p>Clave:   <b><?php echo $_SESSION['clave']; ?></b></p>
  <?php } else { ?>
    <p>No hay sesion activa. <a href="pagina1_form.php">Iniciar sesion</a></p>
  <?php } ?>
</body>
</html>