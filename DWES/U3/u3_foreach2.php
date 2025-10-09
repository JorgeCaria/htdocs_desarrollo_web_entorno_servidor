<?php

$gente = array (
                    array(
                        'Familia' => 'Los Simpson',
                        'Padre' => 'Homer',
                        'Madre' => 'Marge',
                        'Hijos' => array('Bart', 'Lisa' , 'Maggie')
                    ),
                    array(
                        'Familia' => 'Los Griffin',
                        'Padre' => 'Peter',
                        'Madre' => 'Lois',
                        'Hijos' => array('Chris', 'Meg' , 'Stewie')
                    )
 );

 //tabular lo siguiente, primero cada elemento y después lo hijos

// foreach($gente as $contenido){
//     foreach ($contenido as $indice => $valor) {
//         if(is_array($valor)){
//             foreach ($valor as $hijos) {
//                         echo "$hijos <br>";
//             }

//         }else{
//             echo "$indice : $valor<br>";
//         }
//     }
// }
echo "<ul>";

foreach($gente as $contenido){
    echo "<ul>"; // Sublista para cada persona

    foreach ($contenido as $indice => $valor) {
        if(is_array($valor)){
            echo "<li>$indice:";
            echo "<ul>"; // Sublista para los hijos
            foreach ($valor as $hijo) {
                echo "<li>$hijo</li>";
            }
            echo "</ul></li>";
        } else {
            echo "<li>$indice: $valor</li>";
        }
    }

    echo "</ul>";
}

echo "</ul>";
?>