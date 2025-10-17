<?php

/*
2. Crea el código que dé respuesta al siguiente planteamiento:

Queremos almacenar en una matriz el número de alumnos con el que cuenta una
academia, ordenados en función del nivel y del idioma que se estudia.

Tendremos 
3 filas que representarán al Nivel básico, medio y de perfeccionamiento y 
4 columnas en las que figurarán los idiomas (0 = Inglés, 1 = Francés, 2 = Alemán y 3
= Ruso). 

Mostrar por pantalla los alumnos que existen en cada nivel e idioma.

            1   14  8   3
            6   19  7   2
            3   13  4   1

*/

$alumnos = array(
                array(1, 14, 8, 3),
                array(6, 19, 7, 2),
                array(3, 13, 4, 1)
);

$basico   = 0;
$medio    = 0;
$perfeccionamiento = 0;

$ingles   = 0;
$frances  = 0;
$aleman   = 0;
$ruso     = 0;

for($i = 0; $i < count($alumnos); $i++){
    for($j = 0; $j < count($alumnos[$i]); $j++){
        echo $alumnos[$i][$j] . "\t";

        if($i == 0) $basico += $alumnos[$i][$j];
        if($i == 1) $medio += $alumnos[$i][$j];
        if($i == 2) $perfeccionamiento += $alumnos[$i][$j];

        if($j == 0) $ingles += $alumnos[$i][$j];
        if($j == 1) $frances += $alumnos[$i][$j];
        if($j == 2) $aleman += $alumnos[$i][$j];
        if($j == 3) $ruso += $alumnos[$i][$j];

    }
    echo "<br>";
}

 echo "basico -> "  . $basico  ;
    echo "<br>";

 echo "medio -> "   . $medio   ;
    echo "<br>";

 echo "perfeccionamiento -> " . $perfeccionamiento ;
    echo "<br>";

 echo "ingles -> "  . $ingles  ;
    echo "<br>";

 echo "frances -> " . $frances ;
    echo "<br>";

 echo "aleman -> "  . $aleman  ;
    echo "<br>";

 echo "ruso -> "    . $ruso    ;
    echo "<br>";


/*
En clase lo hicieron con foreach

*/

?>