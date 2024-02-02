<?php 
$numero_1 = 3;
$numero_2 = 8;

echo 'suma'. ($numero_1 + $numero_2). '<br>';
echo 'resta'. ($numero_1 - $numero_2). '<br>';
echo 'multiplicación'. ($numero_1 * $numero_2). '<br>';
echo 'división'. ($numero_1 / $numero_2). '<br>';
echo 'resto'. ($numero_1 % $numero_2). '<br>';

//operadores de incremento
$year = 2023;
//decremento
echo $year.'year'.'<br>'; // 2024
//incremento
$year++;
echo $year.'<br>'; // 2024

//decremento
$year--;
echo $year.'<br>'; // 2023
//pre-incremento
++$year;
echo $year.'<br>';//2024

//pre decremento
--$year;
//decremento
$year--;
echo $year.'<br>'; // 2022

//predecremento
--$year;



//operadores de asignación
$cifra = 35; //el igual es de asignación

/*Podemos usar el += oara simprificar y asingar sumas */

echo 'nueva cifra '.($cifra+=5).'<br>';//suma 5 a la cifra
echo 'nueva cifra '.($cifra-=5).'<br>';//resta 5 a la cifra
echo 'nueva cifra '.($cifra*=5).'<br>';//multiplixs pot 5 a la cifra
echo 'nueva cifra '.($cifra/=5).'<br>';//divide por 5 a la cifra



?>