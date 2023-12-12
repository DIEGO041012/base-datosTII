<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
   $area_asignada = $_POST['area_asignada'];
   $nombre_apellido = $_POST['nombre_apellido'];
   $tipo = $_POST['tipo'];
   $fecha = $_POST['fecha'];
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    echo "tipo: " . $tipo . "<br>";
    echo "cantidad: " . $cantidad . "<br>";
    echo "fecha: " . $fecha . "<br>";
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO perstamo(area_asignada, nombre_apellido, tipo,fecha) VALUES ('$area_asignadao','$nombre_apellido','$tipo','$fecha')";
    $conexion->query($sql);

}
?>