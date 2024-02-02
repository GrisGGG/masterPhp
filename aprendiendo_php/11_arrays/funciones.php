<?php

$cantantes = ['siddartha', 'dref', 'ko'];

//Funciones de ordenamoento 

asort($cantantes); //alfabeticamente
var_dump($cantantes);

$numeros = [1,2,5,2,6,8];

echo '<br>';
sort($numeros);
var_dump($numeros);
echo '<br>';

arsort($numeros); //oradena al revez
var_dump($numeros);

//añadir elementos al array}}}
echo '<br>';
$cantantes[] = 'Badomens';
array_push($cantantes, 'sjsdcj');
echo '<br>';
var_dump($cantantes);

//quitar elementos
echo '<br>';
array_pop($cantantes); // quita el ultimo elemento
var_dump($cantantes);
echo '<br>';
unset($cantantes[2]); //quita un elemento en particular
var_dump($cantantes);

//aleatorio
echo '<br>';
$indice= array_rand($cantantes);
echo $indice;

//dar la vuelta
echo '<br>';
var_dump(array_reverse($numeros));

//buscar dentro de un array
echo '<br>';
$resultado = array_search('Badomens', $cantantes);

echo '<br>';
//contar numero de elementos
echo count($numeros);

echo sizeof($cantantes);




?>