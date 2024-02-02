<?php
$resultado =0;

for($i = 0; $i <= 100; $i++){
    $resultado += $i;
}

echo "el resultadao es ".$resultado;


//tabla de multiplicar

if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}


for($contador = 1; $contador <= 10; $contador++){
    echo '<h4>'.$numero.'X'.$contador.'='.($numero*$contador);
}


//break

if($numero < 10){
    echo "no se muestra lo demás"
    break; //impide que se siga ejecutando código se sale de la ejecición
}
?>