<?php 

if (isset($_POST['0'])){
    for ($i=0; $i < 10; $i++) { 
        echo("El número " . $i+1 . " es " . $_POST[$i] . "<br>");
    }
}else{
    echo '<form method="post" action="carga_recarga4.php">';
    
    for ($i = 0; $i < 10; $i++) { 
        echo '
            <label for="' . $i . '">Número ' . $i+1 . ':</label>
            <input type="number" id="' . $i . '" name="' . $i . '"><br><br>
        ';
    }

    echo '<input type="submit" value="Mostrar">';
    echo '</form>';
}
?> 
