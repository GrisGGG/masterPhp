<?php
if(!is_dir('mi_carpeta')){ //si no existe la carpeta mi carpeta
    mkdir('mi_carpeta', 0777) or die('no se creo'); //crea una carpeta con todos los permisos
}else{
    echo 'ya existe la carpeta'; 
}

//borar una carpeta
//rmdir('mi_carpeta');
echo '<hr>';
echo '<h1>CONTENIDO CARPETA</h1>';
if($gestor = opendir('./mi_carpeta')){
    while(false !== ($archivo = readdir($gestor))){
        if($archivo != '.' && $archivo != '..'){
            echo $archivo.'<br>';
        }
    }
}
?>