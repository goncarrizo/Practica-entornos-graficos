?php
/*
VARIABLES Y SUS TIPOS:
  $a = TRUE       → boolean
  $b = "xyz"      → string (comillas dobles)
  $c = 'xyz'      → string (comillas simples)
  $d = 12         → integer
  $f              → integer (resultado de doble())
  $g              → integer (referencia a $f)
  $i              → integer (parámetro de doble())

OPERADORES:
  *   → multiplicación (en doble())
  +=  → asignación con suma ($d += 4)
  ?:  → ternario ($d = $a ? ++$d : $d*3)
  ++  → incremento prefijo (++$d) y posfijo ($d++)
  +=  → asignación con suma ($f += 10)
  =   → asignación simple

FUNCIONES Y PARÁMETROS:
  doble($i)        → función definida por el usuario, recibe $i y retorna $i*2
  gettype($a)      → devuelve el tipo de $a  → "boolean"
  gettype($b)      → devuelve el tipo de $b  → "string"
  gettype($c)      → devuelve el tipo de $c  → "string"
  gettype($d)      → devuelve el tipo de $d  → "integer"
  is_int($d)       → verifica si $d es entero → true
  is_string($a)    → verifica si $a es string → false (es boolean)
  echo             → imprime valores en pantalla

ESTRUCTURAS DE CONTROL:
  if (is_int($d))    → condicional simple
  if (is_string($a)) → condicional simple

SALIDA POR PANTALLA, paso a paso:
  1. echo gettype($a)  → "boolean"
  2. echo gettype($b)  → "string"
  3. echo gettype($c)  → "string"
  4. echo gettype($d)  → "integer"

  5. is_int($d) es true → $d += 4 → $d = 12 + 4 = 16

  6. is_string($a) es false → NO imprime nada

  7. $d = $a ? ++$d : $d*3
     $a es TRUE → se ejecuta ++$d → $d = 17
     $d queda en 17

  8. $f = doble($d++)
     $d++ usa el valor ACTUAL (17) y luego incrementa
     doble(17) = 17*2 = 34 → $f = 34
     después del llamado: $d = 18

  9. $g = $f += 10
     $f = 34 + 10 = 44
     $g = $f = 44

  10. echo $a, $b, $c, $d, $f, $g
      $a (TRUE)  → imprime "1"
      $b         → "xyz"
      $c         → "xyz"
      $d         → 18
      $f         → 44
      $g         → 44

SALIDA FINAL COMPLETA:
  booleansstringstringinteger1xyzxyz184444
*/
?>