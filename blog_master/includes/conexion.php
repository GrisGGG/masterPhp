<?php 
//conexión
$servidor = 'localhost';
$usuario = 'root';
$password = '';
$basededatos = 'blog_master';

$db = mysqli_connect($servidor, $usuario, $password, $basededatos);

//consulta
mysqli_query($db, "SET NAMES 'utf8'");

//Incio de sesión
if(!isset($_SESSION)){
    session_start();
}

?>