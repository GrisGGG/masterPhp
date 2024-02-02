<?php
/**COOKIES
 * FICHERO DE INFORMACIÓN QUE SE ALMACENA EN EL NAVEGADOR DEL USUARIO 
 * QUE VISITA LA WEB, CON EL FIN DE RECORDAR Y RASTREAR COMPORTAMIENTOS
 * DEL USUARIO EN LA WEB.
 */

 //CREAR COOKIE
 //setcookie("nombre", "valor que sólo puede ser texto", caducidad, ruta, dominio);
setcookie("micookie", "valor de mi galleta");

//cookie con expiración
setcookie("unyear", "valor de cookie de 365 dias", time()+(60*60*30*365));


?>

<a href="verCookies.php">Ver mis galletas</a>