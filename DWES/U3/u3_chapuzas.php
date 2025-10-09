<?php
   
   //sort
   // |hola|adios|pepe|juan|perro|gato|


    $array_num = array(1,4,5,2,7,5);
    sort($array_num);
    $array_string = array("hola", "adios", "pepe", "juan", "perro", "gato");
    sort($array_string);
    print_r($array_num);
    echo "<br>";
    print_r($array_string);
    echo "<br><br>";
    
    //
    //Una frase separada palabra por palabra y otro array separdo letra por letra

    $palabra_por_palabra = explode(' ', "Esta es la frase elegida");
    print_r($palabra_por_palabra);
    // echo "$palabra_por_palabra";

    $letra_por_letra = str_split("Esta es la frase elegida");
    print_r($letra_por_letra);
    echo "<br><br>";

    //array_find ejemplo:
    $array = [
    'a' => 'dog',
    'b' => 'cat',
    'c' => 'cow',
    'd' => 'duck',
    'e' => 'goose',
    'f' => 'elephant'
];

    // Find the first animal with a name longer than 4 characters.
    // var_dump(array_find($array, function (string $value) {
    //     return strlen($value) > 4;
    // }));

    //count ejemplo
    $a[0] = 1;
    $a[1] = 3;
    $a[2] = 5;
    var_dump(count($a));
    echo "<br><br>";
    
    

    //array_count ejemplo
    $array = array(1, "hello", 1, "world", "hello");
    print_r(array_count_values($array));


?> 