<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Subida de archivos</title>
</head>
<body>
    <form action="upload.php" method="POST" enctype="multipart/form-data">
        <input type="file" name="archivo" id="archivo">
        <input type="submit" value="Enviar">
    </form>

    <h1>Listado de Imágenes</h1>
    <?php
    $gestor = opendir('./images');

    if($gestor):
        while(($image = readdir($gestor)) !== false):
            if($image != '.' && $image != '..'){
                echo "<img src='images/$image' height='200px'><br>";
            }
        endwhile;
    endif;
    ?>
</body>
</html>