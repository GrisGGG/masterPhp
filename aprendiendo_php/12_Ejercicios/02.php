<?php

/*arreglo que guarde elementos hasta que llegue a 120 elementos */


function arregloConMax(){
    $arreglo = array();
    for($i = 0 ; $i < 120; $i++){
       array_push($arreglo, "elemento-".$i.",     ");
    
    }
    var_dump($arreglo);
}


arregloConMax();


?>