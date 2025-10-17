<?php 
echo <<<_END
  <form method="post" action="carga_recarga3.php">
        <label>Número 1:</label>
        <input type="number" id="num1" name="num1"><br><br>

        <label>Número 2:</label>
        <input type="number" id="num2" name="num2"><br><br>

        <label>Operación</label>
        <input type="text" id="op" name="op"></input>

        <button type="submit" name="bton">Enviar</button>
    </form>
_END;

if (isset($_POST['num1']) && isset($_POST['num2'])){
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
}
?> 
