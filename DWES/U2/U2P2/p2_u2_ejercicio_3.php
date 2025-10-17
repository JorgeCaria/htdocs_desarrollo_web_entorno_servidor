<?php

/*
3. Almacena  en  un  array  los  10  primeros  números  pares.  Imprímelos  cada  uno  en 
una línea. 

*/

$num = 1;
$pares_array = array();

while(count($pares_array) < 10){
   if($num%2==0){
      $pares_array[] = $num;
      echo "$num <br>";
   }
   $num++;
}


?>