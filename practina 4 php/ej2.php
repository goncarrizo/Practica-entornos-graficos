<?php
/*
PARTE a) — Los tres códigos con while y do-while

Código 1: while con $i++  (posfijo)
   imprime $i ANTES de incrementar
   imprime: 1 2 3 4 5 6 7 8 9 10

Código 2: while con sintaxis alternativa y $i++ separado
   imprime $i ANTES de incrementar
   imprime: 1 2 3 4 5 6 7 8 9 10

Código 3: do-while con ++$i (prefijo), $i empieza en 0
   incrementa PRIMERO y luego imprime
   imprime: 1 2 3 4 5 6 7 8 9 10

CONCLUSIÓN a): Los tres son EQUIVALENTES, imprimen 1 al 10.

-------------------------------------------------------------

PARTE b) — Los cuatro códigos con for

Código 1: for clásico
   imprime: 1 2 3 4 5 6 7 8 9 10

Código 2: for sin condición, con break cuando $i > 10
   imprime: 1 2 3 4 5 6 7 8 9 10

Código 3: for sin nada (;;), con break y $i++ manual
   imprime: 1 2 3 4 5 6 7 8 9 10

Código 4: for con print en la expresión de incremento
   imprime: 1 2 3 4 5 6 7 8 9 10

CONCLUSIÓN b): Los cuatro son EQUIVALENTES, imprimen 1 al 10.

-------------------------------------------------------------

PARTE c) — if/elseif vs switch

Código 1: if / elseif encadenado
   evalúa $i contra 0, 1 y 2 secuencialmente

Código 2: switch con break en cada case
   evalúa $i contra 0, 1 y 2

CONCLUSIÓN c): Son EQUIVALENTES, producen la misma salida
  para cualquier valor de $i entre 0 y 2.
*/
?>