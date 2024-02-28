<?php
//Iniciar sesión y la conexión a la bd
require_once 'includes/conexion.php';

//Recoger datos del formulario

if (isset($_POST)) {
    //BORRAR DATOS DE LA ANTIGUA SESION
    // if(isset($_SESSION['error_login'])){
    //     unset($_SESSION['error_login']);
    // }
    if(isset($_SESSION['error_login'])){
        unset($_SESSION['error_login']);
         }

    $email = trim($_POST['email']);
    $password = $_POST['password'];
    
    //consulta para comprobar las credenciales del usuario
    $sql = "SELECT * FROM usuarios WHERE email = '$email'";
    $login = mysqli_query($db, $sql);

    if($login && mysqli_num_rows($login) ==1){
        $usuario = mysqli_fetch_assoc($login);
        // var_dump($usuario);
        // die();

        //Comprobar la contraseña /cifrar

        $verify = password_verify($password, $usuario['password']);
        // var_dump($verify);
        // die();
        if ($verify) {
            # utilizar una sesión para guardar los datos de usuario
            // echo "TEST";
            // var_dump($usuario);
            //  die();
            $_SESSION['usuario'] = $usuario;
           
        }else{
            # si algo falla enviar una sesión con el fallo 
            $_SESSION['error_login'] = "Login Incorrecto";
        }
    }else{
        $_SESSION['error_login'] = "Login Incorrecto";
    }

    
header('Location: index.php');

}


//consulta para comprobar las credenciales del usuario

//utilizar una sesión para guardar los datos del usuario

//si algo falla enviar una sesion de fallo

//redirigir al indexphp
?>