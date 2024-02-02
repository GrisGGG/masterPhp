<?php
/**
 * Ejercicio1: crear una sesión que aumente su valor en razon de que 
 * por el parametro get counter sea 1 o 0
 */

session_start();

if(!isset($_SESSION['variable'])){
    $_SESSION['variable'] = 0;
}
if(isset($_GET['counter']) && $_GET['counter'] == 1){
    $_SESSION['variable']++;
}
if(isset($_GET['counter']) && $_GET['counter'] == 0){
    $_SESSION['variable']--;
}
?>
<h1>El valor de la sesión numero es de <?= $_SESSION['variable']?></h1>;

<a href="01.php?counter=1">Aumentar 1</a>
<br>
<a href="01.php?counter=0">Disminuir 1</a>



