<?php
/*
ANÁLISIS:
  Antes del include, $flor y $color no están definidas.
  PHP las trata como strings vacíos ("").

SALIDA LÍNEA 1:
  echo "El $flor $color \n";
   imprime: "El  "   (con espacios vacíos donde irían las variables)
   genera avisos de "undefined variable" pero no detiene la ejecución

Luego se ejecuta: include 'datos.php';
   define $color = 'blanco' y $flor = 'clavel'

SALIDA LÍNEA 2:
  echo " El $flor $color";
   imprime: " El clavel blanco"

SALIDA COMPLETA:
  "El  "
  " El clavel blanco"
*/
?>