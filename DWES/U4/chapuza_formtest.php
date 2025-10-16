<?php // chapuza_formtest.php

if (isset($_POST['numero1']) && isset($_POST['numero2'])){
  echo "Resultado: " . $_POST['numero1'] + $_POST['numero2'];      
}
else{
 echo <<<_END
<form method="post" action="chapuza_formtest.php">
    <h1>Numeros a Sumar</h1>

    <div>
      <label for="numero1">Numero 1</label>
      <input type="number" id="numero1" name="numero1" placeholder="Primer numero" required minlength="1" />
    </div>

    <div>
      <label for="numero2">Numero 2</label>
      <input type="number" id="numero2" name="numero2" placeholder="Seguno numero" required minlength="1" />
    </div>

    <button type="submit">Sumar</button>
  </form>
_END;
 }
?> 