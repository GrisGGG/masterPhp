<?php
/*
//abrir archivo fopne(nombre de archivo, modo de abrirlo
$archivo = fopen('fichero.txt', "a+"); //a+ todos los permisos

//leer archivo
//$contenido = fgets($archivo); solo leee la primera linea del archivo

//para leer todo el archivo
while(!feof($archivo)){ //mientras no llegues al final del archivo
    $contenido = fgets($archivo); // obten  el conteenido 
    echo $contenido.'<br>'; //imprimelo y concatenale un br
}

fwrite($archivo, "*********sOY UN TEXTO INCRUSTDO DESDE PHP");
//cerrar archivo
fclose($archivo);
*/

//COPIAR ARCHIVO
copy('fichero.txt', 'fichero_copiado.txt') or die('Error al copiar');

//cambiar nombre
rename('fichero_copiado.txt', 'archivo_renombrado.txt');

//eliminar archivo
unlink('archivo_renombrado.txt') or die('error al eliminar');

if(file_exists('fichero.txt')){
    echo 'el fichero existe';
}else{
    echo 'el fichero no existe';
}








?>