<?php
$servidor="localhost";
$usuario="root";
$contraseña="";
$basedatos="bdfactura";

$conexion=new mysqli($servidor,$usuario,$contraseña,$basedatos);

if($conexion->connect_errno)
{
    die("Error:".$connexion->connect_errno);
}
?>