<?php
namespace MisClases;

class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Guadalupe";
        $this->email = "guadalupe.gachupin@gmail.com";
    }
}