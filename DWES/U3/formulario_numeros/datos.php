<?php
    
    $operator = '';
    $result = '';

    if($_POST['op'] == '+'){
        $op_operator = '+';
        $result = $_POST['num1']+$_POST['num2'];
    }

    if($_POST['op'] == '-'){
        $op_operator = '-';
        $result = $_POST['num1']-$_POST['num2'];
    }

    if($_POST['op'] == '*'){
        $op_operator = '*';
        $result = $_POST['num1']*$_POST['num2'];
    }

    if($_POST['op'] == '/'){
        $op_operator = '/';
        $result = $_POST['num1']/$_POST['num2'];
    }

    echo("La" . $operator . " de " . $_POST['num1'] . $_POST['op'] . $_POST['num2'] . " es " . $result . ".");


?>