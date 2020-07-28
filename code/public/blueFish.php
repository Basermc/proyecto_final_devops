<?php
$cifrada = password_hash("clave123", PASSWORD_BCRYPT);
echo $cifrada . "<br>";
if(password_verify("clave123", $cifrada))
{
    echo "Clave correcta";
}
else
{
    echo "Clave incorrecta";
}
?>
