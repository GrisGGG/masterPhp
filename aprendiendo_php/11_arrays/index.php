<?php
/*
    Array
    Colección de datos/valores bajo un unico nombre,
    a los que se puede acceder desde el nombre y el numero de
    pocision del elemento.
*/

//definir arrays

$movies= array('batman', 'spiderman', 'lotr');
$cantantes = ['siddartha', 'dref', 'ko'];

//Imprimir elementos del array
echo $movies[1];
echo '<br>';
echo $cantantes[0];
echo '<br>';

//iMPRIMIR TODOS LOS ELEMENTOWS DE UN ARRAY
echo "<ul>";
for($i=0; $i < count($movies); $i++){
    echo "<li>$movies[$i]</li>";
}
echo "</ul>";
echo '<br>';

//usando foreach
echo "<ul>";
foreach ($cantantes as $cantante) {
    # code...
    echo "<li>$cantante</li>";
}
echo "</ul>";
echo '<br>';

//arrays asosiativos (los indices pueden ser palabras en vez de n´meros)

$personas = array(
    'nombre' => 'victor',
    'apellido' => 'garcia',
    'web' => 'guadalupeG'
);
echo '<br>';
//array multidimensional (array dentro de array)

$contactos = array(
    array(
        'nombre' => 'Isaias',
        'email' => 'isaias@com'
    ),
    array(
        'nombre' => 'salvador',
        'email' => 'salvador@com'
    ),
    array(
        'nombre' => 'Guadalupe',
        'email' => 'Guadalupe@com'
    )
    );
    echo '<br>';
//imprimir array

echo $contactos[0]['nombre'];

echo '<ul>';
foreach ($contactos as $key => $contacto) {
    # code...
    echo "<li>";
    echo $contacto['email'];
    echo "</li>";
}
echo '<ul>';
?>