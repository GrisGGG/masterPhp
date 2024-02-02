<?php

//debuggear
$nombre = "guadalupe";
var_dump($nombre);

//fechas
echo date('d-m-y');
echo '<br>';
echo time();
echo '<br>';
//matemáticas
echo 'raiz cuadrada de 10'.sqrt(10);
echo '<br>';
echo 'numero aleatorio entre 10 y 40'.rand(19,40);
echo '<br>';
echo 'pi equivale a '.pi();
echo '<br>';
echo 'redondear '.round(5.6754, 1);//precicison de decimales

//funciones internas de php

echo gettype($nombre);
echo '<br>';

//comprobar si una variable es de un tipo u otro     is

if(is_string($nombre)){
    echo 'esa variable es string';
}

echo '<br>';
if(!is_bool($nombre)){ // si no es un booleano
    echo 'esa variable es string';
}
echo '<br>';
// para comprobbar si una variable existe             isset

if(isset($saludo)){
    echo "existe";
}else{
    echo "no existe";
}
echo '<br>';
//para limpiar espacios incesesarios                   trim
$frase = "      hola   como   va  ";
var_dump(trim($frase));

//eliminar variables /indices

$year = 2020;
unset($year);
echo '<br>';
//comprovar variables vacias

if(empty($nombre)){
    echo 'vacia';
}else{
    echo 'llena';
}
echo '<br>';

//longitud de una cadena
$cadena = "cadena de texto";
echo strlen($cadena);
echo '<br>';
//encontrar caracter o palabra en string

$frase = 'la vida es bella';
echo strpos($frase, 'vida'); //3 empieza en el caracter 3
echo '<br>';

//remprazar contenido de un string

$frase = str_replace("vida", "moto", $frase);
echo $frase;

//mayusculas o minusculas
echo strtoupper($frase);
echo '<br>';
echo strtolower($frase);