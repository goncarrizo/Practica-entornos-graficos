<?php
/*
PARTE a):
  Genera dinámicamente una tabla HTML de 5 filas x 2 columnas
  usando bucles for anidados.
  - El for externo recorre las filas ($r de 1 a 5)
  - El for interno recorre las columnas ($c de 1 a 2)
  - Cada celda contiene &nbsp; (espacio en blanco)
  La tabla resultante tiene borde y ocupa el 90% del ancho.

PARTE b):
  Es un formulario autoenvíable (se envía a sí mismo con
  $_SERVER['PHP_SELF']).
  - Si el formulario NO fue enviado aún (!isset submit):
    muestra un campo de texto para ingresar la edad y un botón.
  - Si el formulario FUE enviado (else):
    lee la edad ingresada y:
     si es >= 21: imprime "Mayor de edad"
     si es < 21:  imprime "Menor de edad"
*/
?>