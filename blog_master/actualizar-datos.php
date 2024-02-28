<?php

//Si algo esta trayendo POST
if(isset($_POST)){
    //cargar conexión a la bd       
    require_once 'includes/conexion.php';
} 
    /*Entonces... Sí el dato nombre de POST no esta vacio asígnalo
    a la variable $nombre, si no asignale un false.*/
    $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']):false;
    $apellidos = isset($_POST['apellidos']) ? mysqli_real_escape_string($db, $_POST['apellidos']):false;
    $email = isset($_POST['email']) ? mysqli_real_escape_string($db, trim($_POST['email']) ) : false;
 
    
    //Array de errores
    $errores = array();
    
    /*Validar los datos antes de guardarlos en la bd Sí nombre es diferente de vacio y si no esun número entonces es un nombre valido */
    if(!empty($nombre) && !is_numeric($nombre) && !preg_match("/[0-9]/", $nombre)){
        $nombre_validado = true;
    }else{
        $nombre_validado = false;
        $errores['nombre'] = "El nombre no es valido.";
    }
    if(!empty($apellidos) && !is_numeric($apellidos) && !preg_match("/[0-9]/", $apellidos)){
        $apellidos_validado = true;
    }else{
        $apellidos_validado = false;
        $errores['apellidos'] = "Los apellidos no son validos.";
    }
    if(!empty($email) && filter_var($email, FILTER_VALIDATE_EMAIL)){
        $email_validado = true;
    }else{

        $email_validado = false;
        $errores['email'] = "El email no es valido.";
    }

$guardar_usuario = false;

if(count($errores) == 0){
    $usuario = $_SESSION['usuario'];
    $guardar_usuario = true;

    //comprobar si el email existe
    $sql = "SELECT id, email FROM usuarios WHERE email = '$email';";
    $isset_email = mysqli_query($db, $sql);
    $isset_user = mysqli_fetch_assoc($isset_email);

    if($isset_user['id'] == $usuario['id'] || empty($isset_user)){
    $sql = "UPDATE usuarios SET nombre = '$nombre', apellido= '$apellidos', email= 'email' WHERE id =".$usuario['id'];
    $guardar = mysqli_query($db, $sql);
    if($guardar){
        $_SESSION['usuario']['nombre'] = $nombre;
        $_SESSION['usuario']['apellido'] = $apellidos;
        $_SESSION['usuario']['email'] = $email;
        $_SESSION['completado'] = 'Los datos se han actualizado con éxito';
    }else{
        $_SESSION['errores']['general'] = 'Fallo al actualizar tus datos';
    }
}else{
        $_SESSION['errores']['general']= 'El email ya existe';
    }}else{
    //errores
    $_SESSION['errores'] = $errores;//en session mandamos el array de errores   
}

header('location:mis-datos.php');
?>