<?php
/**SESIONES
Almacenar y persistir datos del usuario mientras navega en el sitio web
hasta que cierra sesion o cierra el navegador.
*/
session_start();

$variable_normal = "una variable normal";

$_SESSION['variable_persistente']= "Hola soy una sesión activa";
?>