<?php

/*
4. 
Genera una matriz de 4*4 de forma aleatoria con números enteros desordenados 
mostrar en un renglón los elementos almacenados en la diagonal principal y en el 
siguiente los de la diagonal secundaria.

*/

$array_numeros_desordenados = array(
                                       array(2, 4, 6, 8),
                                       array(6, 8, 1, 9),
                                       array(0, 1, 4, 7),
                                       array(3, 5, 7, 9)
);

$n = 0;

for($i = 0; $i < count($array_numeros_desordenados); $i++){
   for($j = 0; $j < count($array_numeros_desordenados[$i]); $j++){
      echo $array_numeros_desordenados[$n][$n] . "\t";
   }
   echo "<br>";
}

?>