<?php
/**HERENCIA
 * -La herencia nos permite compartir funcionalidades o caracteristicas
 * entre clases, con el fin de repetir el menos código posible.
 */
require_once 'clases.php';

$persona1 = new Persona ();
$persona1->setNombre("Guadalupe");

echo "<pre>";
var_dump($persona1);
echo "</pre>";


$informatico = new Informatico();

$informatico->programaEn("Javascript, php");

echo "<pre>";
var_dump($informatico);
echo "</pre>";

$tecnico = new tecnicoRedes();
echo "<pre>";
var_dump($tecnico);
echo "</pre>";



?>