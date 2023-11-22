<?php
// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Conexión a la base de datos
    $servidor = "localhost";
    $usuario = "root";
    $contrasena = "";
    $base_datos = "nombre_de_tu_base_de_datos"; // Reemplaza con el nombre de tu base de datos

    $conexion = new mysqli($servidor, $usuario, $contrasena, $base_datos);

    // Verifica la conexión
    if ($conexion->connect_error) {
        die("Error en la conexión: " . $conexion->connect_error);
    }

    // Recupera los datos del formulario
    $personaEncargada = $_POST["personaEncargada"];
    $procesador = $_POST["procesador"];
    $marca = $_POST["Marca"];
    $modelo = $_POST["modelo"];
    $discoDuro = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $memoriaRAM = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $serie = $_POST["Serie"];
    $sistemaOperativo = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $activoFijo = $_POST["Activo fijo"];
    $conexionTipo = $_POST["Conexion"];
    $velocidad = $_POST["Velocidad"];
    $nombrePC = $_POST["Nombre pc"];
    $mac = $_POST["MAC"];
    $area = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $archivosTemporales = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $revisionAntivirus = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $revisionInformacion = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $limpiezaPapeleraReciclaje = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $revisionActualizacionesWindows = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $revisarCopiaSeguridadOneDrive = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $desmontajeEquipo = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $limpiezaInterna = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $perifericos = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto
    $limpiezaExterna = $_POST["validationCustom04"]; // Asegúrate de asignar el nombre correcto

    // Query SQL para insertar los datos en la tabla
    $sql = "INSERT INTO nombre_de_tu_tabla (personaEncargada, procesador, marca, modelo, discoDuro, memoriaRAM, serie, sistemaOperativo, activoFijo, conexionTipo, velocidad, nombrePC, mac, area, archivosTemporales, revisionAntivirus, revisionInformacion, limpiezaPapeleraReciclaje, revisionActualizacionesWindows, revisarCopiaSeguridadOneDrive, desmontajeEquipo, limpiezaInterna, perifericos, limpiezaExterna) VALUES ('$personaEncargada', '$procesador', '$marca', '$modelo', '$discoDuro', '$memoriaRAM', '$serie', '$sistemaOperativo', '$activoFijo', '$conexionTipo', '$velocidad', '$nombrePC', '$mac', '$area', '$archivosTemporales', '$revisionAntivirus', '$revisionInformacion', '$limpiezaPapeleraReciclaje', '$revisionActualizacionesWindows', '$revisarCopiaSeguridadOneDrive', '$desmontajeEquipo', '$limpiezaInterna', '$perifericos', '$limpiezaExterna')";

    if ($conexion->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conexion->error;
    }

    // Cierra la conexión
    $conexion->close();
}
?>