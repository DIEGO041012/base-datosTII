<?php
function conectarBD(){
    $servidor="localhost";
    $usuario="root";
    $contraseña="root";
    $basedatos="base_de_datos_ti";
    
    $conexion=new mysqli($servidor,$usuario,$contraseña,$basedatos);
    
    if($conexion->connect_errno)
    {
        die("Error:".$conexion->connect_errno);
    }

    return $conexion;
}

?>