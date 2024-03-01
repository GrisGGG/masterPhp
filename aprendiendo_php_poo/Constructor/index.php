<?php
/**Constructores
 * Método especial dentro de una clase y se utiliza 
 * para darle un valor a los datos o propiedades que
 * tiene un objeto.
 * -El constructor es el primer método que se ejecuta
 * al crear el objeto y se llama automaticamente al 
 * crearlo.
 * -Este método puede recibir parámetros, el contructor 
 * nunca devuelve ningpun dato.
 * -Es un método mágico que se encarga de setear info en 
 * las propiedades
 */
require_once('coche.php');

$coche = new Coche("Lila","bmw","x-5",234);

//VISIBILIDAD DE ATRIBUTOS

/**Al ser PUBLIC, podemos acceder a ella directamente y cambiarla */
$coche->color="ROSA";

/*Al ser PROTECTED, no puedo acceder a ella directamente, para cambiarlo
*debo hacerlo a travez de un método*/
$coche->setMarca("Audi");

echo $coche->mostrarInformacion($coche);
// var_dump($coche);

?>