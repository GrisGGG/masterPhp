<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Validar Formulario</h1>
    <?php
    if(isset($_GET['error'])){
        $error = $_GET['error'];
        if($error == 'faltan_valores'){
            echo '<strong style="color:red"> Introduce todos los datos en los campos</strong>';
        }
        if($error == 'nombre'){
            echo '<strong style="color:red"> Introduce el nombre </strong>';
        }
        if($error == 'apellido'){
            echo '<strong style="color:red"> Introduce los apellidos</strong>';
        }
        if($error == 'edad'){
            echo '<strong style="color:red"> Introduce una edad adecuada</strong>';
        }
        if($error == 'email'){
            echo '<strong style="color:red"> Introduce el correo</strong>';
        }
        if($error == 'password'){
            echo '<strong style="color:red"> Introduce una contraseña mayor a 5 digitos</strong>';
        }
    }
    ?>
    <form action="procesar_info.php" method="post">
        <label for="nombre">Nombre:</label>
        <p><input type="text" name="nombre" required="required" pattern="[A-Za-z]+"></p>
        <label for="apellido">apellido:</label>
        <p><input type="text" name="apellido" required="required" pattern="[A-Za-z]+"></p>
        <label for="edad">edad:</label>
        <p><input type="number" name="edad" required="required" pattern="[0-9]+"></p>
        <label for="email">email:</label>
        <p><input type="email" name="email"  ></p>
        <label for="contrasenia">contraseña:</label>
        <p><input type="password" name="contrasenia" required="required"></p>
        <input type="submit" value="Enviar">

    </form>
</body>
</html>