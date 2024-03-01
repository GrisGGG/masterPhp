<?php
class Coche{
    /*PUBLIC: Podemos acceder a ellos desde cualquier lugar, dentro de la clase
    actual, dentro de clases que heredan esta clase o fuera de la clase.*/
    public $color;
    /**PROTECTED: Podemos acceder desde la clase que los define y desde clases
     * que hereden esta clase*/
    protected $marca;
    /**PRIVATE:Uniccamente se pueden acceder desde esta clase */
    public $modelo;
    public $velocidad;

    public function __construct($color,$marca,$modelo,$velocidad){
    $this->color = $color;
    $this->marca = $marca;
    $this->modelo = $modelo;
    $this->velocidad = $velocidad;
    }

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
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    //tipo de información que se pasara
    public function mostrarInformacion(Coche $miObjeto){
        if(is_object($miObjeto)){
        $informacion = "<h1>Información del Coche</h1>";
        $informacion .= "Color: ".$miObjeto->color;
        $informacion .= "<br/> Modelo: ".$miObjeto->modelo;
        $informacion .= "<br/> Velocidad: ".$miObjeto->color;
        return $informacion;
        }else{
            informacion = "Tu dato es este: $miObjeto";
        }
        return $informacion;
    }
}
?>