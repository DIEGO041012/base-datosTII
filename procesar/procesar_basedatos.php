<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['searchTerm'])) {
    $searchTerm = $_POST['searchTerm'];

    // Realizar la búsqueda en varias tablas
    $sql = "
        SELECT id AS id_inventario, tipo, cantidad, fecha FROM inventario WHERE tipo LIKE '%$searchTerm%'
        UNION
        SELECT id AS id_prestamo, area, nombres, tipo, fecha_ingreso AS fecha FROM prestamo WHERE campo_prestamo LIKE '%$searchTerm%'
        UNION
        SELECT id AS id_cronograma, mantenimiento_asignado, nombre, area, fecha FROM cronograma WHERE campo_cronograma LIKE '%$searchTerm%'
    ";

    $result = $conexion->query($sql);

    if ($result) {
        $rows = $result->fetch_all(MYSQLI_ASSOC);
        echo json_encode(['success' => true, 'data' => $rows]);
    } else {
        echo json_encode(['success' => false, 'message' => 'Error en la consulta SQL']);
    }
} else {
    echo json_encode(['success' => false, 'message' => 'Petición no válida']);
}
?>
