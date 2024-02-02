<?php
$mi_primera_variable = "Hola mundoo";
$numero= 24;
$buleano = true;

echo '<h1>'.$mi_primera_variable.'</h1>';
echo $numero;

//reasignamos valores
$numero = 45;
echo $numero; // 45 el valor se actializa

/*
    Tipos de dato
                        
    Entero (int / integer) = 99
    Coma flotante/ decimales (float/double) = 3.15
    cadenas de texto (string) = "Hola"
    Booleano (true/false)
    array(Colección de objetos)
    objetos
*/

/*
    Podemos saber que tipo de dato es 
    una variable con la función
    gettype()
*/
$numero = 23;
$flotante = 3.45;
$cadena = "Hola";
$buleano = true;
$nulo = null;
echo gettype($numero);//Integer

echo $buleano; //1

/* 
    Para nombrar variables:
    Su nombre no puede empezar con un
    número, pueden contener números, pero
    No al inicio.
    No podemos guines, solo guiones bajos
    No signos de operadores + * / 
    No podemos usar ñ o tildes
 */

var_dump($cadena); //nos da info sobre la variable debuguear variables

echo 'esto es un' . $cadena;
?>
