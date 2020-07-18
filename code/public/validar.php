<?php
// Si no hay cookie (o está caducada), volvemos al index.php
if(!isset($_COOKIE['acceso']))
{
    header("Location: index.php");
}
else
{
    // Extraer de la cookie el usuario y la clave, y validarlo
    // en la base de datos
    $datos = explode(",", $_COOKIE['acceso']);
    $usuario = $datos[0];
    $clave = $datos[1];
    
    include_once 'conexion.php';
    
    $sqlSelect = "select usuario, clave from usuarios where usuario = '$usuario' and clave = '$clave'";
    $resultado = mysqli_query($conexion, $sqlSelect);
    if (mysqli_num_rows($resultado) == 0)
    {
        header ("Location: index.php");
    }
}
?>