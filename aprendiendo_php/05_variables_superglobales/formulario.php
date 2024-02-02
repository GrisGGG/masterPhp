<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulario en PHP</title>
</head>
<body>
    <h1>Formulario en PHP</h1>
    <! 
        Podemos usar el método GET o POST para mandar información
        del formulario.

        En action debemos colocar el nombre del archivo que recibira
        la información.

    ->
    <form method="POST" action="recibir.php">
        <p>
            <label for="nombre">Nombre</label>
            <input type="text" name="nombre">
        </p>
        <p>
            <label for="apellido">Apellidos</label>
            <input type="text" name="apellido">
        
        </p>
        <input type="submit" value="Enviar datos">
</form>
</body>
</html>