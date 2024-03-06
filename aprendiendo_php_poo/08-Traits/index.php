<?php
/**TRAILS
 *Permiten definir una serie de métodos para
 compartirlo dentro de diferentes clases.
 */
trait Utilidades{
   public function mostrarNombre(){
      echo "<h1>El nombre es ".$this->nombre."</h1>";
   }
}

 class Coche{
    public $nombre;
    public $marca;

    use Utilidades;
 }

 class Persona{
    public $nombre;
    public $apellidos;
    use Utilidades;
 }

 class VideoJuego{
    public $nombre;
    public $anio;
    use Utilidades;
 }

 $coche = new Coche;
 $coche->nombre = "Ferrari";
 echo $coche->mostrarNombre();

 $persona = new Persona;
 $persona->nombre = "Guadalupe";
 echo $persona->mostrarNombre();


 $videojuego = new VideoJuego;
 $videojuego->nombre = "Overwatch";
 echo $videojuego->mostrarNombre();