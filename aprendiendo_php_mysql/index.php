<?php
//conectar a la base de datos
$conexion = mysqli_connect("localhost", "root", "", "phpmysql");
//comparar si la conexión es correcta

if(mysqli_connect_errno()){
    echo "La conexión a la bd fallo";
}else{
    echo "conexión exitosa";
}
echo '<br>';
//consulta para configurar la codificación de caracteres
mysqli_query($conexion, "SET NAMES 'UTF8'");

//consulta select desde php
$query = mysqli_query($conexion, "SELECT * FROM notas");

//mysqli_fetch_assoc Obtener una fila de resultado como un array asociativo
while($nota = mysqli_fetch_assoc($query)){
    //var_dump($nota);
    echo '<h2>'.$nota['titulo'].'</h2>';
    echo $nota['descripcion'].'<br>';
}
echo '<br>';

$sql = "INSERT INTO notas VALUES(NULL, 'nota desde php', 'mandando notas desde php', 'rojo')";
$insert = mysqli_query($conexion, $sql);

if($insert){
    echo 'datos insertados con éxito';
}else{
    echo "fallo al insertar datos".mysqli_error($conexion);
}
?>