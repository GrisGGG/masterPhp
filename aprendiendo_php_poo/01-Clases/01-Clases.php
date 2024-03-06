<?php
/**Programación orientada a objetos
 * 01-Clases
 * -Molde con el cual podemos crear objetos con las
 * mismas caracteristicas o similares.
 * -Las propiedades serán las caracteristicas 
 * que tiene un objeto.
 * -Los métodos son las acciones de las que será 
 * capaz de hacer el objeto.
 */

 //definir una clase
class Coche{
    //Atributos o propiedades (variables)
    public $color = "Rojo";
    public $marca = "Ferrari";
    public $modelo = "Aventados";
    public $velocidad = 300;

    //Métodos(funciones)
    public function getColor(){
        return $this->color;
    }
    public function setColor($color){
        $this->color = $color;
    }
    public function acelerar(){
        $this->velocidad++;
    }
    public function frenar(){
        $this->velocidad--;
    }
    public function getVelocidad(){
        return $this->velocidad;
    }
    public function getModelo(){
        return $this->modelo;
    }
    public function setModelo($modelo){
        $this->modelo = $modelo;
    }

}//fin definición de la clase

//Crear un objeto / Instanciar la clase
$coche = new Coche();

//Usar los métodos
echo $coche->getVelocidad()."<br/>";

$coche->setColor("Amarillo");
echo "El color del coche es: ".$coche->getColor()."<br/>";

$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->acelerar();
$coche->frenar();

echo "La velocidad del coche es de: ".$coche->getVelocidad();

$coche2 = new Coche();

$coche2->setColor("Verde");
$coche2->setModelo("x5 2022");

var_dump($coche);
echo "<br/>";
var_dump($coche2)
?>