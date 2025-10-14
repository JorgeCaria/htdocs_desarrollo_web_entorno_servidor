<?php

/*
5. 

Generar de forma aleatoria una matriz de 3x5 con valores numéricos. 

a. Imprimir todos los elementos en forma sucesiva tomándolos por fila. 
b. Igual al anterior pero por columna.

*/

// $matriz = [];


// for($i=0; $i<3; $i++){
//    for($j=0; $j<5; $j++){
//       $matriz[$i][$j] = rand(0, 9);
//       echo $matriz[$i][$j] . "\t";
//    }
//    echo "<br>";
// }


// echo "<hr>";


// for($i=0; $i<count($matriz); $i++){
//    for($j=0; $j<count($matriz[$i]); $j++){
//       echo $matriz[$i][$j] . "\t";
//    }
//    echo "<br>";
// }


/*
Solución clase:

   Quiero repasar esta lógica 
*/

$filas = count($matriz);
$columnas = count($matriz[0]);

//columnas
for($i=0; $i<$columnas; $i++){
   for($j=0; $j<$filas; $j++){
      echo $matriz[$j][$i] . "\t";
   }
   echo "<br>";
}

//filas
for($i=0; $i<$filas; $i++){
   for($j=0; $j<$columnas; $j++){
      echo $matriz[$i][$j] . "\t";
   }
   echo "<br>";
}


?>