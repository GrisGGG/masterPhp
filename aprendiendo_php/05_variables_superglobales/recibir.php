<?php 

/**
 * 
 * Con GET, los datos se reciben por la URL
http://localhost/master_php/aprendiendo_php/06_variables_superglobales
/recibir.php?nombre=guadalupe&apellidos=GARCIA


Podemos recibir los datos desde cualquiera
de los dos métodos, con GET y POST

$_GET['nombredeldatoarecibir']
$_POST['nombredeldato']


 */

 //Imprimimos los datos
 echo '<h1>'.$_POST['nombre'].'</h1>';
 echo '<h1>'.$_POST['apellido'].'</h1>';
?>