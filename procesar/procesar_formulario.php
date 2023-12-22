<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
    $persona_encargada = $_POST['personaEncargada'];
    $procesador = $_POST['procesador'];
    $marca = $_POST["Marca"];
    $modelo = $_POST["modelo"];
    $disco_duro = $_POST["disco_duro"];
    $memoria_RAM = $_POST["memoria_RAM"];
    $serie = $_POST["serie"];
    $sistema_operativo = $_POST["sistema_operativo"];
    $activo_fijo = $_POST["Activo_fijo"];
    $conexionTipo = $_POST["conexion"];
    $velocidad = $_POST["Velocidad"];
    $nombre_pc = $_POST["Nombre_pc"];
    $mac = $_POST["MAC"];
    $area = $_POST["area"];
    $archivos_temporales = $_POST["archivos_temporales"];
    $antivirus = $_POST["antivirus"];
    $crystal_disk = $_POST["cystal_disk"];
    $limpieza_papelera_reciclaje = $_POST["limpieza_papelera_reciclaje"];
    $actualizaciones_windows_update = $_POST["actualizacion_windows_update"];
    $copia_seguridad_one_drive = $_POST["copia_de_seguridad_one_drive"];
    $desmontaje_equipo = $_POST["desmontaje_de_equipo"];
    $limpieza_interna = $_POST["limpieza_interna"];
    $perifericos = $_POST["perifericos"];
    $limpieza_externa = $_POST["limpieza_externa"];
    $teclado = isset($_POST["teclado"]) ? 'SI' : 'NO';
    $mause = isset($_POST["mause"]) ? 'SI' : 'NO';
    $pantalla = isset($_POST["pantalla"]) ? 'SI' : 'NO';
    $base = isset($_POST["base"]) ? 'SI' : 'NO';
    $usb_wifi = isset($_POST["usb_wifi"]) ? 'SI' : 'NO';
    $multipuerto = isset($_POST["multipuerto"]) ? 'SI' : 'NO';
    $usb_ethernet = isset($_POST["usb_ethernet"]) ? 'SI' : 'NO';
    $hdmi_vga = isset($_POST["hdmi_vga"]) ? 'SI' : 'NO';
    $fecha = $_POST['fecha'];
    $n_mantenimiento = $_POST['n_mantenimiento'];

    // Imprimir datos para verificar que se obtienen correctamente
    echo "persona_encargada: " . $persona_encargada . "<br>";
    echo "procesador: " . $procesador . "<br>";
    echo "marca: " . $marca . "<br>";
    echo "modelo: " . $modelo . "<br>";
    // ... (continuar con los demás campos)

    // Consulta SQL (cambiar a la corrección que hice antes)
    $sql = "INSERT INTO informacion_pc(persona_encargada, marca, modelo, disco_duro, memoria_RAM, procesador, nombre_pc, conexion, activo_fijo, mac, sistema_operativo, serie, velocidad, perifericos, limpieza_externa, limpieza_interna, desmontaje_de_equipo, copia_de_seguridad_one_drive, actualizaciones_windows_update, limpieza_papelera_reciclaje, crystal_disk, antivirus, archivos_temporales, area, fecha, hdmi_vga, usb_ethernet, multipuerto, usb_wifi, base, pantalla, mause, teclado, n°_mantenimiento) VALUES ($persona_encargada, $marca, $modelo, $disco_duro, $memoria_RAM, $procesador, $nombre_pc, $conexionTipo, $activo_fijo, $mac, $sistema_operativo, $serie, $velocidad, $perifericos, $limpieza_externa, $limpieza_interna, $desmontaje_equipo, $copia_seguridad_one_drive, $actualizaciones_windows_update, $limpieza_papelera_reciclaje, $crystal_disk, $antivirus, $archivos_temporales, $area, $fecha, $hdmi_vga, $usb_ethernet, $multipuerto, $usb_wifi, $base, $pantalla, $mause, $teclado, $n_mantenimiento)";

    // Prepare the statement
    
    $stmt = $conexion->prepare($sql);

    // Bind parameters
    $stmt->bind_param("ssssssssssssssssssssssssssssssssss", $persona_encargada, $marca, $modelo, $disco_duro, $memoria_RAM, $procesador, $nombre_pc, $conexionTipo, $activo_fijo, $mac, $sistema_operativo, $serie, $velocidad, $perifericos, $limpieza_externa, $limpieza_interna, $desmontaje_equipo, $copia_seguridad_one_drive, $actualizaciones_windows_update, $limpieza_papelera_reciclaje, $crystal_disk, $antivirus, $archivos_temporales, $area, $fecha, $hdmi_vga, $usb_ethernet, $multipuerto, $usb_wifi, $base, $pantalla, $mause, $teclado, $n_mantenimiento);

    // Execute the statement
    $stmt->execute();

    // Close the statement
    $stmt->close();
}
?>
																				