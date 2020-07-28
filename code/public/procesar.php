<?php
function mensajeUsuarioYOClaveIncorrectos()
{
    echo "<!DOCTYPE html>
            <html>
            <head>
            <link rel='stylesheet' type='text/css' href='estilos.css'>
            </head>
            <body>
            <div>";
    echo "<p>Usuario y/o clave incorrectos</p>";
    echo "<a href='index.php'>Volver</a>";
    
}
if(!isset($_POST['usuario']) || strlen($_POST['usuario']) < 3
        || !isset($_POST['clave']) || strlen($_POST['clave']) < 5)
{
    mensajeUsuarioYOClaveIncorrectos();
}
else 
{
    include_once 'conexion.php';
    
    if($_POST['accion'] == 'Entrar')
    {
        // Validar usuario
        $usuario = $_POST['usuario'];
        $sqlSelect = "select usuario, clave from usuarios where usuario = '$usuario'";
        $resultado = mysqli_query($conexion, $sqlSelect);
        if (mysqli_num_rows($resultado) > 0)
        {
            $fila = mysqli_fetch_assoc($resultado);
            if(password_verify($_POST['clave'], $fila['clave']))
            {
                // Usuario y clave correctos
                setcookie("acceso", $usuario . "," . $fila['clave'], time() + 60);
                header("Location: bienvenida.php");
            }
            else // Usuario encontrado pero clave no correcta
            {
                mensajeUsuarioYOClaveIncorrectos();
            }
            
        }
        else // Usuario no encontrado
        {
            mensajeUsuarioYOClaveIncorrectos();
        }
            
        
    }
    else if($_POST['accion'] == 'Registrarse')
    {
        // Registrarse
        // 1.- El nombre no debe existir
        // 2.- Clave > 4 y usuario > 2
        // Comprobar si el nombre de usuario ya existe
        $usuario = $_POST['usuario'];
        $sqlSelect = "select usuario from usuarios where usuario = '$usuario'";
        $resultado = mysqli_query($conexion, $sqlSelect);
        if (mysqli_num_rows($resultado) > 0)
        {
            // Nombre ya existe.
            echo "El usuario ya existe.<br>";
            echo "<a href='index.php'>Volver</a>";
        }
        else
        {
            // Insertar usuario y clave
            $clave = password_hash($_POST['clave'], PASSWORD_BCRYPT);
            $sqlInsertar = "insert into usuarios (usuario, clave) values ('$usuario', '$clave')";
            if(!mysqli_query($conexion, $sqlInsertar))
            {
                die("Error al insertar.");
            }
            mysqli_close($conexion);
            echo "Usuario creado.<br>";
            echo "<a href='index.php'>Volver</a>";
        }
    }
}
?>
</div>
</body>
</html>