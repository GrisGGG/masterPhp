<?php 
/**
if(condición){
    instrucciones
}else{
    instrucciones
}

OPERTADORES DE COMPARACIÓN 
== igual
=== identico
!= diferente
<> diferente
1== no identico
< menor que
>mayor que
<= menor o igual que
>= mayor o igual que
 */

//Ejercicio1
$color = "rojo";

if($color = "rojo"){
        echo "El color es rojo";
}else{
    echo 'el color no es rojo';
}
echo '<br>';

//Ejercicio2
$year = 2003;

if($year < 2023){
    echo 'El año es menor a 2023';
}else{
    echo 'El año es mayor a 2023';
}
echo '<br>';

//Ejercicio3
$nombre = 'Guadalupe';
$edad = 31;
$continente = 'Amarica';
$pais = 'mexico';

if($edad >= 18){
    echo '<h2>'.$nombre.' es mayor de edad'.'</h2>';
    if($continente = 'America'){
        echo '<h2>'.'pais de origen: '.$pais.'</h2>';
        
    }
}else{
    echo 'persona menor de edad';
}

echo '<br>';
//Ejercicio4     ELSEIF

$diadelasemana =2 ;

if($diadelasemana == 1){
    echo 'LUNES';
}elseif($diadelasemana == 2){
    echo 'MARTES';
}elseif($diadelasemana == 3){
    echo 'MIERCOLES';
}elseif($diadelasemana == 4){
    echo 'JUEVES';
}elseif($diadelasemana == 5){
    echo 'VIERNES';
}else{
    echo 'FIN DE SEMANA';
}

//Ejercicio5  

$edad1 = 20;
$edad2 = 64;
$edad_oficial= 18;

if($edad1 >= $edad_oficial && $edad_oficial <= $edad2){
    echo '<h2>'.'esta en edad de trabajar'.'</h2>';
}else{
    echo '<h2>'.'no puede trabajar'.'</h2>'; 
}

//switch

switch ($diadelasemana) {
    case 1:
        echo 'LUNES';
        break;
    case 2:
        echo 'MARTES';
        break;
    case 3:
        echo 'MIERCOLES';
        break; 
    case 4:
        echo 'JUEVES';
        break;
            
    case 5:
        echo 'VIERNES';
        break;
    case 5:
        echo 'FIN DE SEMANA';
        break;
    default:
        # code...
        break;
}

echo '<br>';

//GOTO

//Se salta lineas de codigo DEPENDIENDO de la marca que pongamos
//goto marca;
echo 'hola1';
echo 'hola2';
echo 'hola3';
echo 'hola4';
//marca;

echo 'me salte 4 echos';





?>