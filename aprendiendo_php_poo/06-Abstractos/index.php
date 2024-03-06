<?php

/**CLASE ABSTRACTA
 * -Una clase abstracta es una clase que no se puede instanciar
 * osea que no podemos crear objetos con ella, pero si la podemos 
 * usar para heredar de ella. Y esa clase define la estructura que 
 * puede tener la clase que la herede, incluso puede definir funcionalidad.
 * -los métodos abstractos deben ser definidos también dentro de la
 * clase hija para poder usarse
 */

abstract class Ordenador{
    public $encendido;
    abstract public function encender();
    public function apagar(){
        $this->encendido = false;
    }
}

class PcAsus extends Ordenador{
    public $software;
    public function arrancarSoftware(){
        $this->software = true;
    }
    public function encender(){
        $this->encendido = true;
    }
}

$ordenador= new PcAsus();
$ordenador->encender();
$ordenador->arrancarSoftware();
echo "<pre>";
var_dump($ordenador);
echo "</pre>";