<?php 
/*
    VARIABLES SUPERGLOBALES
    
    variables que estan disponibles dentro de 
    todo el script $_SERVER 
*/

//VARIABLES DEL SERVIDOR
echo '<h1>';
echo $_SERVER['SERVER_ADDR']; //IP DEL SERVIDOR
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_NAME']; //NOMBRE DEL SERVIDOR
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_SOFTWARE']; //SOFT DEL SERVIDOR
echo '</h1>';

echo '<h1>';
echo $_SERVER['SERVER_AGENT'];//NOMBRE DEL NAVEGADOR DEL CLIENTE
echo '</h1>';

echo '<h1>';
echo $_SERVER['REMOTE_ADDR'];//IP DEL CLIENTE
echo '</h1>';
?>