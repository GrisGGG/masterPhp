<?php
namespace PanelAdmin;
class Usuario{
    public $nombre;
    public $email;

    public function __construct(){
        $this->nombre = "Valdez Jeronimo";
        $this->email = "jero@gmail.com";
    }
}