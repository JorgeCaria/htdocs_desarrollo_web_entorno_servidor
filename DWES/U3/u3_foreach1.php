<?php

$personas = array(

            $persona1 = array(
                        'nombre' => "Yolanda",
                        'apellido1' => "Iglesias",
                        'apellido2' => "Suarez"
            ),
            $persona2 = array(
                        'nombre' => "Juan",
                        'apellido1' => "Lopez",
                        'apellido2' => "Blanco"
            )

);

foreach($personas as $indice){
    foreach ($indice as $nombres => $valor) {
        echo "$nombres : $valor<br>";
    }
}

?>