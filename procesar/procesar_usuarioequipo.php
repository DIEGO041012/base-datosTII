<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
   $area = $_POST['area'];
   $usuario = $_POST['usuario'];
   $articulo = $_POST['articulo'];
   $fecha = $_POST['fecha'];
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    echo "area: " . $area . "<br>";
    echo "usuario: " . $usuario . "<br>";
    echo "articulo: " . $articulo . "<br>";
    echo "fecha: " . $fecha . "<br>";
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO usuario_equipo(area, usuario, articulo, fecha_ingreso) VALUES ('$area','$usuario','$articulo','$fecha')";
    $conexion->query($sql);

}
?>