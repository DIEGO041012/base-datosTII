<?php
  require './conexiondatabase.php';

  $conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $tipo = $_POST("tipo");
    $cantidad = $_POST("cantidad");
    $fechaIngreso = $_POST("fecha");

    $sql = "INSERT INTO inventario (tipo,cantidad,fecha) 
    values('$tipo','$cantidad','$fachaIngreso')";

    if($conexion->query($sql) === true) {
        echo "Datos ingrasado correctamente";
} else {
    echo "error al insertar datos: " . $conexion->error;
}
$conexion->close();
}   
?> 
