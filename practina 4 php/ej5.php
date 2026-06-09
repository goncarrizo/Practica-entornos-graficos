<?php
/*
ANÁLISIS DE contador.php:

El script implementa un contador de visitas persistente usando
un archivo de texto (contador.dat).

Paso a paso:
  1. $archivo = "contador.dat"
      guarda el nombre del archivo donde se almacena el contador

  2. $abrir = fopen($archivo, "r")
      abre el archivo en modo LECTURA

  3. $cont = fread($abrir, filesize($archivo))
      lee TODO el contenido del archivo (el número actual)

  4. fclose($abrir)
      cierra el archivo

  5. $abrir = fopen($archivo, "w")
      abre el archivo en modo ESCRITURA (sobreescribe)

  6. $cont = $cont + 1
      incrementa el contador en 1

  7. $guardar = fwrite($abrir, $cont)
      guarda el nuevo valor en el archivo

  8. fclose($abrir)
      cierra el archivo

  9. echo "Cantidad de visitas: $cont"
     → muestra el total actualizado en pantalla

ARCHIVO visitas.php:
  Simplemente incluye contador.php dentro de una página HTML.
  Cada vez que alguien cargue visitas.php, el contador aumenta.

REQUISITO:
  Crear contador.dat en la misma carpeta con el valor "0"
  y permisos de lectura y escritura.
*/
?>