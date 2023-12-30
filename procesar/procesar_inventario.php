<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
   $tipo = $_POST['tipo'];
   $cantidad = $_POST['cantidad'];
   $fecha = $_POST['fecha'];
    // Puedes obtener los otros campos de la misma manera

    // $cantidadEntera = intval($cantidad);

    // Por ejemplo, solo imprimo los datos por ahora:

    $sql = "SELECT * FROM inventario WHERE tipo = '{$tipo}'";
    $resultado = $conexion->query($sql);
    $fila = $resultado->fetch_assoc();
    $cantidadDB = $fila['cantidad'];
    
    $cantidadNumerica = intval($cantidadDB);
    $cantidadNumerica += intval($cantidad);

    $cantidadString = strval($cantidadNumerica);


    $sql1 =    "UPDATE inventario 
                SET cantidad = {$cantidadString}, fecha = '{$fecha}', fechaSistema = CURRENT_TIMESTAMP()
                WHERE tipo = '{$tipo}'";

    // $sql1 = "INSERT INTO inventario (tipo,cantidad,fecha) VALUES ('{$tipo}','{$cantidad}','{$fecha}')";
    $conexion->query($sql1);

}
?>