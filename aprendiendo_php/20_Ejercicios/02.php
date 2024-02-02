<?php
/*
Ejercicio 2:
función que valide un email con filter_var
recoger dato por get y validarlo 
*/

function validarEmail($correo){
    $status = "No valido";
    if(!empty($correo) && filter_var($correo, FILTER_VALIDATE_EMAIL)){
        $status = "Valido";
    }
    return $status;
}

if(isset($_GET['correo'])){
   echo validarEmail($_GET['correo']);
}else{
    echo "Escribe un email";
}

?>