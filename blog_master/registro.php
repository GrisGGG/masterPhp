<?php

//Si algo esta trayendo POST
if(isset($_POST)){
    //cargar conexión a la bd       
    require_once 'includes/conexion.php';
    //Iniciar una sesión
    if(!isset($_SESSION)){
        session_start();
    }
   
    /*Entonces...

    Sí el dato nombre de POST no esta vacio asígnalo
    a la variable $nombre, si no asignale un false.
    */
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']):false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']):false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email']) ) : false;
    $password = isset($_POST['password']) ? mysqli_real_escape_string($db, $_POST['password']):false;
    
    //Array de errores
    $errores = array();
    
    /*Validar los datos antes de guardarlos en la bd
    Sí nombre es diferente de vacio y si no esun número entonces es un nombre valido
    */
    //VALIDACIÓN NOMBRE
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        //el nombre es validado
        $nombre_validado = true;
    }else{
        //si no, se evalua como falso
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido.";
    }
     //VALIDACIÓN APELLIDOS
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos.";
    }
    //VALIDACIÓN EMAIL
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{

        $email_validado = false;
        $errores['email'] = "El email no es valido.";
    }
    //VALIDACIÓN CONTRASEÑA
    if(!empty($password)){
        $password_validado = true;
    }else{
        $password_validado = false;
        $errores['password'] = "La constraseña no es valida.";
    }

$guardar_usuario = false;

if(count($errores) == 0){
    $guardar_usuario = true;
    //cifrar contraseña
    //encipta la pasword 4 veces
    $password_segura = password_hash($password, PASSWORD_BCRYPT, ['cost'=>4]);  
    //Insertar usuario en la bd
    $sql = "INSERT INTO usuarios VALUES(null, '$nombre', '$apellidos', '$email', '$password_segura', CURDATE())";
    $guardar = mysqli_query($db, $sql);
    if($guardar){
        $_SESSION['completado'] = 'El registro se ha completado con éxito';
    }else{
        $_SESSION['errores']['general'] = 'Fallo al guardar el usuario';
    }
}else{
    //errores
    $_SESSION['errores'] = $errores;//en session mandamos el array de errores   
}
}
header('location:index.php');
?>