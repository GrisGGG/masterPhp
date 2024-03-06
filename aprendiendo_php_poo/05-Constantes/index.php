<?php
class Usuario{
    const URL_COMPLETA = 'http://localhost';
    public $email;
    public $password;
    function getEmail(){
        return $this->email;
    }
    function getPassword(){
        return $this->password;
    }
    function setEmail($email){
        $this->email = $email;
    }
    function setPassword($password){
        $this->password = $password;
    }
}
//Sólo podemos acceder a las constantes con dos puntos

$usurario = new Usuario();
echo $usurario::URL_COMPLETA;
echo "<br/>";
var_dump($usurario);
echo "<br/>";
//tambien podemos acceder a ella desde la clase ya que
//al ser una propiedad estatica esta definida a nivel de clase
//no al nivel de objeto

echo Usuario::URL_COMPLETA;
?>