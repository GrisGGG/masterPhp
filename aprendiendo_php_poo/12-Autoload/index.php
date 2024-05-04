<?php
require_once 'autoload.php';

// $persona = new Usuario();

// echo $persona->nombre;

use MisClases\Usuario;
use MisClases\Categoria;
use MisClases\Entrada;
use PanelAdmin\Usuario as UsuarioAdmin;

class Principal{
    public $nombre;
    public $categoria;
    public $entrada;

    public function __construct(){
$this->usuario = new Usuario();
        $this->categoria = new Categoria();
        $this->entrada = new Entrada();
    }
}

$principal = new Principal();
var_dump($principal->usuario);

$usuario = new UsuarioAdmin();
var_dump($usuario);

$class = class_exists('PanelAdmin\Usuario');

if($class){
    echo 'La clase existe';
}else{
    echo 'La clase no existe';
}

$metodos = get_class_methods($principal);
$busqueda = array_search('setApellidos', $metodos);
var_dump($busqueda);