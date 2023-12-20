<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
    $mantenimiento_asignado = $_POST['mantenimiento'];
    $nombre = $_POST['nombre'];
    $area = $_POST['area'];
    $fecha = $_POST['fecha'];
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    echo "mantenimiento_asignado: " . $mantenimiento_asignado . "<br>";
    echo "nombre: " . $nombre . "<br>";
    echo "area: " . $area . "<br>";
    echo "fecha: " . $fecha . "<br>";
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO cronograma(mantenimiento_asignado, nombre, area, fecha) VALUES ('$mantenimiento_asignado','$nombre','$area','$fecha')";

    $conexion->query($sql);

}
?>