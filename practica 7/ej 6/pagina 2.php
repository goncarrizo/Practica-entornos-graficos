<?php
// buscar_alumno.php - Formulario + busqueda en BD
session_start();

if (isset($_POST['submit'])) {
    $mail = $_POST['mail'];

    $link = mysqli_connect("localhost", "root", "", "base2")
        or die(mysqli_connect_error());

    $sql = "SELECT nombre FROM alumnos WHERE mail='$mail'";
    $res = mysqli_query($link, $sql);

    if (mysqli_num_rows($res) > 0) {
        $fila = mysqli_fetch_array($res);
        $_SESSION['nombre'] = $fila['nombre'];
        echo "<p>Alumno encontrado: <b>" . $_SESSION['nombre'] . "</b></p>";
        echo "<a href='bienvenida.php'>Ir a pagina de bienvenida</a>";
    } else {
        echo "<p>No se encontro el mail ingresado.</p>";
        echo "<a href='buscar_alumno.php'>Intentar de nuevo</a>";
    }
    mysqli_close($link);

} else {
?>
<html>
<head><title>Buscar alumno</title></head>
<body>
  <h2>Ingresar mail del alumno</h2>
  <form action="buscar_alumno.php" method="post">
    Mail: <input type="text" name="mail" size="30">
    <br><br>
    <input type="submit" name="submit" value="Buscar">
  </form>
</body>
</html>
<?php } ?>