<?php
/**Crear un array con el contenido de la tabla 
 * 
 * ACCION       AVENTURA        DEPORTES
 * GTA          ASSESIANS       FIDA 19
 * COD          CRASH           FES19
 * PUGB         PRINCE OF       MOTO GF
 *              PERSIA
*/

$tabla = array(
    "ACCION" => array('GTA', 'COD', 'PUGB'),
    "AVENTURA" => array('ASSASSIANS', 'CRASH', 'PRINCE OF PERSIA'),
    "DEPORTES" => array('FIFA 19', 'FES 18', 'MOTO GF' )
);

$categorias = array_keys($tabla); //ACCION,AVENTURA,DEPORTES

?>
<table border="1">
    <?= require_once '05/encabezado.php'; ?>
    <?= require_once '05/primerafila.php'; ?>
    <?= require_once '05/segundafila.php'; ?>
    <?= require_once '05/tercerafila.php'; ?>
</table>