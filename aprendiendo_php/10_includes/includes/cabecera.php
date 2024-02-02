

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php $nombre = 'Guadalupe Gachupin';?>
    <div class="cabecera">
        <h1>Includes en php</h1>
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <li><a href="sobremi.php">sobre mi <?=$nombre ?></a></li>
            <li><a href="contacto.php">Contacto</a></li>
        </ul>
    </div>
