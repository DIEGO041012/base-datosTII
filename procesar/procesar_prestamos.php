<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
   $area_asignada = $_POST['asignacion'];
   $nombre_apellido = $_POST['nombres'];
   $tipo = $_POST['tipo'];
   $fecha = $_POST['fecha'];
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    echo "asignacion: " . $area_asignada . "<br>";
    echo "nombres: " . $nombre_apellido . "<br>";
    echo "tipo: " . $tipo . "<br>";
    echo "fecha: " . $fecha . "<br>";
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO prestamos(area, nombres, tipo, fecha_ingreso) VALUES ('$area_asignada','$nombre_apellido','$tipo','$fecha')";
    $conexion->query($sql);

}
?>