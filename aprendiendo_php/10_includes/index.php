<?php

/*
Podemos crear ficheros en otros archivos y podemos llamarlos desde 
otro archivo con las siguientes funciones: include, include_once, require, requiere_once


la diferencia entre include y requiere es que require es mpas estricto ya que al no poderse
incluir un fichero este impirde la ejecucion completa de la pagina, sin embargo con include 
ponemos ver los ficheros que si se hayan podido cargar
*/
include 'includes/cabecera.php';
?>


    <!-- 
        contenido
    --->
    <hr>
    <div>
        <h2>Esta es la página de inicio</h2>
        <p>Texto que prueba la página de inicio</p>
    </div>
    <hr>
<?php include 'includes/footer.php';?>   