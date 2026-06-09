<?php
/*
PARTE a):
  $matriz = array("x" => "bar", 12 => true);
  echo $matriz["x"];   → imprime: "bar"
  echo $matriz[12];    → imprime: "1"  (true se convierte a 1)

PARTE b):
  $matriz = array("unamatriz" => array(6=>5, 13=>9, "a"=>42));
  echo $matriz["unamatriz"][6];    → imprime: 5
  echo $matriz["unamatriz"][13];   → imprime: 9
  echo $matriz["unamatriz"]["a"];  → imprime: 42

PARTE c):
  $matriz = array(5=>1, 12=>2);  → $matriz[5]=1, $matriz[12]=2
  $matriz[] = 56;    → se agrega en índice 13 (siguiente al mayor=12)
  $matriz["x"] = 42; → $matriz["x"]=42
  unset($matriz[5]); → elimina el elemento con clave 5
  unset($matriz);    → destruye todo el array completo
  No hay salida por pantalla (no hay echo ni print)
*/
?>