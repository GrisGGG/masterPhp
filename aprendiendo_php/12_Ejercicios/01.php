<?php

$numeros = [2,5,7,34,6,7,9];

echo '<p>Recorrer y mostrar un array</p>';

echo "<ul>";
foreach ($numeros as $num) {
    # code...
    echo "<li>$num</li>";
}
echo "</ul>";
echo '<br>';


echo '<p>Ordenarlos</p>';
sort($numeros);
echo "<ul>";
foreach ($numeros as $num) {
    # code...
    echo "<li>$num</li>";
}
echo "</ul>";
echo '<br>';

echo '<p>MostrarLongitud</p>';

echo count($numeros);

echo '<p>Buscar el 3er elemento</p>';

$resultado=  array_search(6, $numeros);
echo $resultado;
?>