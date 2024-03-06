<?php
require_once 'configuracion.php';
/**STATIC
 * son propiedades o mpetodos normales, sólo que para llamarlos
 * no necesito instanciar la clase
 */

 ConfiguracionStatic::setColor("blue");
 ConfiguracionStatic::setEntorno("localhost");
 ConfiguracionStatic::setNewsletter(true);

 echo ConfiguracionStatic::$color.'<br/>';
echo ConfiguracionStatic::$entorno.'<br/>';
 echo ConfiguracionStatic::$newsletter.'<br/>';

 $configuracion = new ConfiguracionStatic();
 $configuracion::$color = "rojo";
 echo $configuracion::color;