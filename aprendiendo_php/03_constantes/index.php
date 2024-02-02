<?php 
/*
    Constantes
    Es un contenedor de información que no puede variar.

    Asi se define una constante
    define('nombre de la constante', 'valor de la constante')
*/
define('nombre', 'Guadalupe Gachupin');
define('web', 'GuadalupeGarcia.com');

//Para imprimir no ocupamos el signo de pesos
echo '<h1>'. nombre . '</h1>';

//constantes predefinidas
echo PHP_VERSION;
echo '<br>';
echo __LINE__;
echo '<br>';
echo __METHOD__;
?>