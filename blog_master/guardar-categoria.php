<?php
if(isset($_POST)){
    //cargar conexión a la bd       
    require_once 'includes/conexion.php';
    //Iniciar una sesión
  $nombre = isset($_POST['nombre']) ? mysqli_real_escape_string($db, $_POST['nombre']): false;

   //Array de errores
   $errores = array();
    
   /*Validar los datos antes de guardarlos en la bd
   Sí nombre es diferente de vacio
   */
   //VALIDACIÓN NOMBRE
   if(!empty($nombre)){
       //el nombre es validado
       $nombre_validado = true;
   }else{
    $nombre_validado = false;
    $errores['nombre']="Campo vacio";
   }
   if(count($errores) == 0){
    $sql ="INSERT INTO categorias VALUES(null, '$nombre');";
    $guardar = mysqli_query($db, $sql);
   }

}
header('Location: index.php')


?>