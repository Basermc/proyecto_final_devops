<?php include_once 'validar.php'?>
<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" type="text/css" href="estilos.css">
</head>
</html>
<body>
<?php
function writeMsg() {
  return "Bienvenido"; 
 
}

echo writeMsg();
?>
&nbsp;
<?php
echo $usuario;

?>
<br/>
<a href='pagina_dos.php'>Ir pagina 2</a>
</body>
</html>