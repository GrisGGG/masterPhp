<?php
/**INTERFAZ
 * Contrato donde definimos que métodos y en que orden van a 
 * estar en una clase.
 * -Cuando implementemos una interfaz en una clase, esa clase
 * debe cumplir obligatoriamente ese contrato. tienen que estar 
 * todos los métodos dentro de esa clase.
 * 
 */

 interface Ordenador {
    public function encender();
    public function apagar();
    public function reiniciar();
    public function desfragmentar();
    public function detectarUSB();
 }

class iMac implements Ordenador{
    public $modelo;

    function getModelo(){
        return $this->modelo;
    }
    function setModelo($modelo){
        $this->modelo = $modelo;
    }
    public function encender(){

    }
    public function apagar(){

    }
    public function reiniciar(){

    }
    public function desfragmentar(){

    }
    public function detectarUSB(){
        
    }
}
$mac = new iMac();
$mac->setModelo("Macbook PRO 2019");
echo $mac->getModelo();