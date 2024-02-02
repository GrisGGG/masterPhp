<?php

if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];

    while($numero1 <= $numero2){
        echo $numero1.', ';
        $numero1++;
    }
}else{
    echo "los parametros get no existen"
}

?>