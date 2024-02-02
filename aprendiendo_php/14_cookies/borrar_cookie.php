<?php
/**Para borrar una cookie tienes primero que borrarla con unset()
 * y luego caducarla
 */

if($_COOKIE['micookie']){
    unset($_COOKIE['micookie']);
    setcookie('micookie', '', time()-100);
}

//redirigir a una pagina

header('location:verCookies.php');
?>