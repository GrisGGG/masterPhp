<?php require_once 'conexion.php';?>
<?php require_once 'helpers.php';?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./assets/style.css">
    <title>Blog de Videojuegos</title>
</head>
<body>
    <header id="cabecera">
        <div id="logo">
            <a href="index.php"><h1>Blog de Videojuegos</h1></a>
        </div>
        <!-- menu-->
            <nav id="menu">
        <ul>
            <li><a href="index.php">Inicio</a></li>
            <?php
            $categorias = conseguirCategorias($db); 
            if(!empty($categorias)):
            while($categoria = mysqli_fetch_assoc($categorias)):
            ?>
            <li>
                <a href="categoria.php?id=<?=$categoria['id']?>"><?=$categoria['nombre']?></a></li>
            <?php endwhile;
            endif;
            ?>
            <li><a href="">Sobre mi</a></li>
            <li><a href="">Contacto</a></li>
        </ul>
    </nav>
    </header>
