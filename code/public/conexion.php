<?php
$servidor = "192.168.20.12";
$user = "root";
$password = "rootpassword";
$nombreBD = "registro";

$conexion = mysqli_connect($servidor, $user, $password, $nombreBD);
if(!$conexion)
{
    die("Fallo de conexión:" . mysqli_connect_error());
}
?>