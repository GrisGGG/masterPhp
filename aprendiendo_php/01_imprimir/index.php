<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Imprimir</title>
</head>
<body>
    //encabezado
    <h1>Master en php - <?php echo "Guadalupe G."; ?></h1>

    <?= "Bienvenido al curso de PHP" ?>
    <?php echo "<h3>Listado de videojuegos<h3/>";
     echo "<ul>
        <li>uno</li>
        <li>uno</li>
        <li>uno</li>
    </ul>";
    //con concatenación
    echo "<ul>"
        ."<li>uno</li>"
        ."<li>uno</li>"
        ."<li>uno</li>"
    ."</ul>";
    ?>
</body>
</html>