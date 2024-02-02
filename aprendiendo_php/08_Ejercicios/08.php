<?php
if(isset($_GET['numero1']) && isset($_GET['numero2'])){
    $numero1 = $_GET['numero1'];
    $numero2 = $_GET['numero2'];


    if($numero1 < $numero2){
        while($numero1 <= $numero2){
            if($numero1 % 2 == 0){
                echo '<p>'.$numero1.' Es par</p>';  
            }else{
                echo '<p>'.$numero1.' Es impar</p>';  
            }
            $numero1++;
        }
    }else{
        echo "El número 1 debe ser menor que el 2";
    }
    
}else{
    echo "los parametros get no existen";
}

?>