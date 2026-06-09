<?php
// pagina1_form.php - Formulario de login
?>
<html>
<head><title>Login</title></head>
<body>
  <h2>Ingreso de usuario</h2>
  <form action="pagina2_sesion.php" method="post">
    Usuario: <input type="text" name="usuario"> <br><br>
    Clave:   <input type="password" name="clave"> <br><br>
    <input type="submit" value="Ingresar">
  </form>
</body>
</html>