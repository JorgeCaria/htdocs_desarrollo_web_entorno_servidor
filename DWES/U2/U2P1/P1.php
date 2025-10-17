<?php

//PRÁCTICA 1. Estructuras de control: condicionales y bucles
//A la prof le gusta mucho el ejercicio 10 y uno extra que va a añadir (11)

/**
* 1. Dados 2 números asignados dentro del código a variables realizar el siguiente
* cálculo: si son iguales que los multiplique, si el primero es mayor que el segundo
* que los reste y si no que los sume. Mostrar el resultado en pantalla.
**/
// echo "Ejercico 1. </br>";


// $a = 1;
// $b = 2;

// if($a == $b){
//     echo "Iguales " . ($a*$b);
// }elseif($a>$b){
//     echo "Mayor " . ($a-$b);
// }else{
//     echo "Menor " . ($a+$b);
// }



/*
    2. Dados 3 números asignados dentro del código a mostrar el número mayor de los
    tres.
*/

// echo "</br></br> Ejercico 2.</br>";

// $a = 1;
// $b = 2;
// $c = 3;

// if($a>$b && $a>$c) echo "El mayor es a :" .$a;
// if($b>$a && $b>$c) echo "El mayor es b :" .$b;
// if($c>$a && $c>$b) echo "El mayor es c :" .$c;


/*
    3. Determinar la cantidad de dinero que recibirá un trabajador por concepto de las
    horas extras trabajadas en una empresa, sabiendo que cuando las horas de
    trabajo exceden de 40, el resto se consideran horas extras y que estas se pagan al
    doble de una hora normal cuando no exceden de 8; si las horas extras exceden de
    8 se pagan las primeras 8 al doble de lo que se pagan las horas normales y el resto
    al triple.
*/

// echo "</br></br> Ejercicio 3 </br>";

// $horas = 56;
// $valor_hora = 10;

// echo "Precio de hora de trabajo normal: " . $valor_hora . "€</br>";
// echo "Número de horas trabajadas: " . $horas . "</br>";

// if($horas > 48) echo "Se pagan " . ($horas - 48) . " horas al triple del precio normal, lo que equivale a " . ($horas - 48) * $valor_hora * 3 ."€ 
//                       y 8 horas al doble del precio normal que equivale a " . (8 * $valor_hora *2) . "€.";

// if($horas > 40 && $horas <= 48) echo "Se pagaran " . $horas-40 . " horas al doble del precio normal lo cual equivale a " . ($horas-40)*$valor_hora*2 . "€.";

// if($horas<=40) echo "No se pagan horas extras.";


/*

4.Identificar entre dos números aleatorios cual es el mayor y si este es par o impar.
   Buscar información previamente para generar números aleatorios y usarla para
   resolver el ejercicion.



$num1 = rand(0,100);
$num2 = rand(0,100);
$num1_tipo = $num1%2==0 ? "par" : "impar";
$num2_tipo = $num2%2==0 ? "par" : "impar";

echo "</br>" . "num1: " . $num1 . "</br>";
echo "</br>" . "num2: " . $num2 . "</br>";

if($num1 > $num2){
    echo "El número mayor es " . $num1 . " y es " . $num1_tipo;
}else{
    echo "El número mayor es " . $num2 . " y es " . $num2_tipo;
}
*/

/*
    5.Crear un programa partir de 3 valores, a b y c que corresponden a los tres
    coeficientes de una ecuación de segundo grado muestre las soluciones de la
    misma La solución de la ecuación de segundo grado depende del signo de b2-4ac:
    · si b2-4ac es negativo no hay soluciones
    · si es nulo, hay sólo una solución -b/2a
    · si es positivo, hay dos soluciones: (-b+sqrt(b2-4ac))/(2a) y (-bsqrt(b2-4ac))/(2a)

*/

// $a = 1;
// $b = 2;
// $c = 3;

// if((2*$b-4*$a*$c)<0){
//     echo "No hay solución.";
// }elseif((2*$b-4*$a*$c)==0){
//     echo "Solución: " . (-$b/2*$a);
// }else{
//     echo "Solución 1:" . (-$b+sqrt(($b * 2)-(4 * $a * $c)))/(2 * $a);
//     echo "Solución 2:" .  (-$b * sqrt(($b * 2) - (4 * $a * $c)))/(2 * $a);
// }


//6. Crear un programa con bucle for para contar desde 0 a 50 de 5 en 5.
//for($i = 0; $i<=50; $i = $i + 5) echo $i . "</br>";

/*
    7. Hacer un programa que calcule todos los números primos entre 1 y 50 y los
    muestre por pantalla. Un número primo es un número entero que sólo es
    divisible por 1 y por sí mismo.
*/

// for ($num=2; $num<=50; $num++) {
// 	$primo=true;
//     for ($i=2; $i<=$num/2; $i++) {
//       if ($num % $i == 0) $primo=false;
//     }
//     if ($primo==true) echo "$num<br>";
//   }

// 8. Calcular si un número entero generado de forma aleatoria entre 1 y 1000 es
// perfecto. 
// Un número perfecto es aquel que la suma de sus sum es él mismo,
// por ejemplo el 6, sus divisores son 1,2,3 la suma de los mismos es 6.

// echo $num = rand(1,1000);
// $sum = 0;

// for($i = 2; $i<=$num; $i++){
//     if($num%$i==0){
//         $sum = $sum + $i;
//     }
// }
// if ($sum == $num && $num != 1) {
//     echo "$num es perfecto";
//   } else {
//     echo "$num NO es perfecto";
//   }

/*
    9. Escriba un programa a partir de un número entero generado de forma aleatoria
    indique si es primo. Un número primo es aquel que es divisible por el mismo y la
    unidad.

    $num=rand(1,100);

  $esprimo=true;
  if ($num==1) {
    $esprimo=false;
  } else {
    for ($i=2; $i<=$num/2; $i++) {
      if ($num % $i == 0) {
        $esprimo=false;
      }
    }
  }
  if ($esprimo) {
    echo "$num es primo";
  } else {
    echo "$num NO es primo";
  }
*/

/*
  10. Generar todos los pares de números formados por combinaciones de dígitos del 1
  al 9, siendo además los dos componentes del par distintos
*/

  // for ($i=1; $i<10; $i++) {
  //   for ($j=1; $j<10; $j++) {
  //     if ($i!=$j) echo "($i,$j)";
  //     $v[$i][$j] = $i + $j;
  //   }
  //   echo "</br>";
  // }

  // var_dump($v);

/*
    11. Sumar la diagonal principal y la diagonal secundaria de un array bidimensional.
        Pero solo se puede utilizar 1 for para la diagonal principal
        y 1 solo for para la diagonal secundaria.

        Hay que buscar en internet como cargar una matriz de 4*4 en un array en php

*/

/*
$matriz = [
    [1, 2, 3, 4],
    [5, 6, 7, 8],
    [9, 10, 11, 12],
    [13, 14, 15, 16]
];


$sumaPrincipal = 0;
$sumaSecundaria = 0; 
for ($i = 0; $i < 4; $i++) {
    $sumaPrincipal += $matriz[$i][$i];  // Suma de la diagonal principal
    $sumaSecundaria += $matriz[$i][3 - $i]; // Suma de la diagonal secundaria
}

echo "Matriz 4x4:<br>";
for ($i = 0; $i < 4; $i++) {
    for ($j = 0; $j < 4; $j++) {
        echo $matriz[$i][$j] . " ";
    }
    echo "<br>";
}


*/

?>