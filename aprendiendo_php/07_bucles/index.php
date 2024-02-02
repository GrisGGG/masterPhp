<?php
/*
        BUCLE WHILE
    Estructura de control que itera o repite la ejercicón
    de una serie de instrucciones tantas veces como sea 
    necesario en base a una condición.

    while(condición){
        bloque de insstrucciones
        otra instrucción
    }

*/

$numero = 0;

while($numero <= 100){
    echo $numero;
    if($numero != 100){
        echo ", ";
    }
        $numero++;
}

echo '<hr>';
//Ejemplo

//iset pregunta si existe una variable del metodo get
if(isset($_GET['numero'])){
    $numero = (int)$_GET['numero'];
}else{
    $numero = 1;
}

echo '<h3>'.'TABLA DE MULTIPLICAR DEL '.$numero.'</h3>';

$contador =1;

while($contador <= 10){
    $resultado = $numero * $contador;
    echo '<h4>'.$numero.'X'.$contador.'='.$resultado;
    $contador++;
}

echo '<hr>';

/*  DO WHILE

do{
    BLOQUE DE INSTRUCCIONES
}while{
    CONDICIÓN
}
*/

$edad = 17;
$contador = 1;

do{ 
    echo "tienes acceso al local".$contador;
    contador++;
}while($edad > 18 && $contador < 10)


















?>