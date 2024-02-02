<?php
/**OBTENER 2 NÚMEROS POR PARAMETRO GET VIA URL
 * Y HACER OPERACIONES DE CALCULADORA CON ELLOS
 */

if(isset($_GET['numero1'])&& isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    echo '<h1>CALCULADORA</h1>';
    echo '<p>Suma: </p>'.($numero1+$numero2);
    echo '<p>Multiplicación: </p>'.($numero1*$numero2);
    echo '<p>Resta: </p>'.($numero1-$numero2);
    echo '<p>División: </p>'.($numero1/$numero2);
}
?>

