<?php
$archivo = $_FILES['archivo']; //Recibimos la imagen en un array y lo guardamos en $archivo
$nombre = $archivo['name'];// obtenemos datos de este archivo como el nombre
$tipo = $archivo['type'];

//validamos que el tipo del archivo sea de una imagen
if($tipo == 'image/jpg' || $tipo == 'image/jpeg' || $tipo == 'image/png'){//si es una imagen entonces
    if(!is_dir('images')){ //pregunta si no existe el directorio "images"
        mkdir('images', 0777);  //si no existe crea la carpeta images
    }
    //si existe entonces, movemos la imagen a la carpeta imagenes
        move_uploaded_file($archivo['tmp_name'], 'images/'.$nombre);
        //redireccionamos a index y mandamos un mensaje de éxito.
        header('Refresh:1, URL=index.php');
        echo '<h1>Imagen subida correctamente.</h1>';
}else{
    //si el documento no es del tipo especificado entonces se redireccionara y un mensaje de error se pondra
    header('Refresh:5, URL=index.php');
    echo '<h1>Sube una imagen con el formato correcto....</h1>';
}


die();
?>