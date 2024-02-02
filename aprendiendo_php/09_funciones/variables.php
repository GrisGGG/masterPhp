<?php
/*
Las variables globales se pueden usar dentro y fuera de funciones
las variables locales son las que se crean dentro de funciones y no se
pueden usar fuera de ellas

***************VARIABLE GLOBAL************************

 */
//SE DECLARA AFUERA
$year = 2023;

//PARA USARLA EN UNA FUNCIÓN DEBE DE USAR LA PALABRA GLOBAL

function años(){
    global $year;
    return $year;
}
echo años();

/**funciones como variables */

function buenasdias(){
    return 'buen dia';
}
function buenastardes(){
    return 'buenas tardes';
}
function buenasnoches(){
    return 'buenas noches';
}

$horario = $_GET['horario'];
$mifuncion = "buenas$horario";
echo $mifuncion();


?>