<?php
/**Ejercicio 3:
 * Interfaz de usuario 2 inputs y 4 botones 
 * uuno para sumar restar dividir y multiplicar
 */
$resultado = false;

if(!empty($_POST['numero1']) && !empty($_POST['numero2'])){ 
    if(!empty($_POST['sumar'])){
        $resultado = $_POST['numero1'] + $_POST['numero2'];
    }if(!empty($_POST['restar'])){
        $resultado = $_POST['numero1'] - $_POST['numero2'];
    }if(!empty($_POST['multiplicar'])){
        $resultado = $_POST['numero1'] * $_POST['numero2'];
    }if(!empty($_POST['dividir'])){
        $resultado = $_POST['numero1'] / $_POST['numero2'];
    }
}

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>
    <form action="" method="POST">
        <label for="numero1">Numero 1:</label>
        <input type="number" name="numero1" id="numero1">
        <br>
        <label for="numero2">Numero 1:</label>
        <input type="number" name="numero2" id="numero2">

        <input type="submit" name="sumar" value="Sumar">
        <input type="submit" name="restar" value="Restar">
        <input type="submit" name="multiplicar" value="Multiplicar">
        <input type="submit" name="dividir" value="Dividir">  
    </form>
    <?php
            if($resultado != false):
                echo '<h1>'.$resultado.'</h1>';
            endif;
        ?>
</body>
</html>

