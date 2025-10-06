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
foreach($gente as $contenido){
    foreach ($contenido as $indice => $valor) {
        if(is_array($valor)){
            foreach ($valor as $hijos) {
                        echo "$hijos <br>";
            }

        }else{
            echo "$indice : $valor<br>";
        }
    }
}

?>