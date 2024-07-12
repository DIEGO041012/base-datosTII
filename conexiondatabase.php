<?php
function conectarBD(){
    $servidor="localhost";
    $usuario="root";
    $contraseña="HnvPhkdaVeZ4pD";
    $basedatos="area_ti";
    
    $conexion=new mysqli($servidor,$usuario,$contraseña,$basedatos);
    
    if($conexion->connect_errno)
    {
        die("Error:".$conexion->connect_errno);
    }

    return $conexion;
}

?>