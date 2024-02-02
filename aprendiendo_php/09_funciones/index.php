<?php
/*Conjunto de instrucciones bajo el mismo nombre
 que se ejecutan con sólo invocar con el nombre
*/


//definimos función
/*
function tabla($numero){
    echo "<h1>la tabla del $numero</h1>";

    for($i= 1; $i <= 10; $i++){
        echo "$numero X $i =  ".($numero * $i);
        echo "<br>";
    }
}

//Invocamos función
if(isset($_GET['numero'])){
    $numero = $_GET['numero'];
    tabla($numero);
}else{
    echo "no hay numero de get";
}
*/

//parametros opcionales

//los primeros dos parametros son obligatorios el 3ro es opcional, ya que ya le estamos dando un valor

function calculadora($num1, $num2, $negrita= false){

    $suma = $num1 + $num2;
    $resta = $num1 - $num2;
    $multiplicacion = $num1 * $num2;
    $division = $num1 / $num2;

    if($negrita){
        echo '<h1>';
    }
    echo "<p>$suma</p>";
    echo "<p>$resta</p>";
    echo "<p>$multiplicacion</p>";
    echo "<p>$division</p>";

    if($negrita){
        echo '</h1>';
    }
}

if(isset($_GET['num1'])  && isset($_GET['num2'])){
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];

    calculadora($num1, $num2);
    calculadora($num1, $num2, true);
    calculadora($num1, $num2);
}else{
    echo 'no hay datos';
}

?>