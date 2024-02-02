<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Formulario</h1>

    <form action="" method="POST" enctype="multipart/form-data">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre"></p>
        <label for="apellido">Apellido:</label>
        <p><input type="text" name="apellido"></p>
        <label for="boton">BOTON:</label>
        <p><input type="button" name="boton" value="clickeame"></p>
        <label for="sexo">Sexo:</label>
        <p><input type="checkbox" name="sexo" value="hombre"></p>
        <p><input type="checkbox" name="sexo" value="mujer"></p>
        <label for="color">Color:</label>
        <p><input type="color" name="color"></p>
        <label for="fecha">fecha:</label>
        <p><input type="date" name="fecha"></p>
        <label for="correo">correo:</label>
        <p><input type="email" name="correo"></p>
        <label for="archivo">Nombre:</label>
        <p><input type="file" name="archivo"></p>
        <label for="numero">Numero:</label>
        <p><input type="number" name="numero"></p>
        <label for="pass">Contraseña:</label>
        <p><input type="password" name="pass"></p>
        <label for="continente">Continente:</label>
        Europa<input type="radio" name="continente">
        America<input type="radio" name="continente">
        Africa<input type="radio" name="continente">
        <textarea name="texto" id="" cols="30" rows="10"></textarea>
        <select name="peliculas" id="">
            <option value="spiderman">Spiderman</option>
            <option value="spiderman">Spiderman</option>
            <option value="spiderman">Spiderman</option>
        </select>












    </form>
</body>

<!--      
VALIDA CAMPOS CARACTERES ENTRE LA A Y Z MAYUSCULAS Y SE ACEPTAN ESPACIOS    
<p><input type="text" name="apellido" pattern=[A-Z ]></p>  -->
</html>