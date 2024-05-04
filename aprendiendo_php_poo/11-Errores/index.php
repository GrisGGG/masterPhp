<?php
try{
    if(isset($_GET['id'])){
        echo "<h1>El parámetro es: {$_GET['id']}</h1>";
    }else{
        throw new Exception('Faltán parámetros');
    }
  
}catch(Exception $e){
 echo 'Ha habido un error: '.$e->getMessage();
}









?>