<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
   $tipo = $_POST['tipo'];
   $cantidad = $_POST['cantidad'];
   $fecha = $_POST['fecha'];
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    echo "tipo: " . $tipo . "<br>";
    echo "cantidad: " . $cantidad . "<br>";
    echo "fecha: " . $fecha . "<br>";
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO inventario(tipo, cantidad, fecha) VALUES ('$tipo','$cantidad','$fecha')";

    $conexion->query($sql);

}
?>