<?php
class Persona {
    public $nombre;
    public $apellidos;
    public $altura;
    public $edad;
    public function getNombre(){
        return $this->nombre;
    }
    public function getApellidos(){
        return $this->apellidos;
    }
    public function getAltura(){
        return $this->altura;
    }
    public function getEdad(){
        return $this->edad;
    }
    public function setNombre($nombre){
        return $this->nombre = $nombre;
    }
    public function setApeliidos($apeliidos){
        return $this->apeliidos = $apeliidos;
    }
    public function setAltura($altura){
        return $this->altura = $altura;
    }
    public function setEdad($edad){
        return $this->edad = $edad;
    } 
    public function hablar(){
        return "Estoy hablando";
    }
    public function caminar(){
    return "Estoy caminando";
    }
}

class Informatico extends Persona{

    //con extends hereda métodos y atributos de la clase que nombra
    public $lenguajes;
    public $experiencia;

    public function __construct(){
        $this->experiencia = 10;
    }

    public function programaEn ($lenguajes){
        $this->lenguajes = $lenguajes;

        return $this->lenguajes;
    }

    public function programar (){
        return "Estoy programando";
    }
    public function repararPc (){
    return "Estoy reparando";
    }
}


class tecnicoRedes extends Informatico {
    public $auditaRedes;

    public function __construct(){
 //para que esta clase herede los datos del constructor debemos poner lo siguiente
        parent::__construct();
    //    $this->experiencia = 5;
    }

    public function auditandoRedes(){
       return $this->auditandoRedes;
    }
}




?>