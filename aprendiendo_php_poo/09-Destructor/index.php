<?php

/**DESTRUCT
 * Cuando ya no haya referencia al objeto lo destruye
 */

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        echo "Instancia del objeto creada";
    }
    public function __destruct(){
        echo "destruyendo el objeto";
    }
}

$usuario = new Usuario();

for($i=0; $i<= 100; $i++){
    echo $i."<br/>";
}