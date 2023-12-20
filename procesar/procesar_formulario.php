<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
    $persona_encargada = $_POST['personaEncargada'];
    $procesador = $_POST['procesador'];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $disco_duro = $_POST["disco_duro"];
    $memoria_RAM = $_POST["memoria_Ram"];
    $serie = $_POST["serie"];
    $sistema_operativo = $_POST["sistema_operativo"];
    $activo_fijo = $_POST["Activo_fijo"];
    $conexionTipo = $_POST["conexion"]; // Corregido: cambiar a $conexionTipo
    $velocidad = $_POST["velocidad"];
    $nombre_pc = $_POST["nombrepc"]; // Corregido: cambiar a $nombrePC
    $mac = $_POST["mac"];
    $area = $_POST["area"];
    $archivos_temporales = $_POST["archivos_temporales"];
    $antivirus = $_POST["antivirus"];
    $crystal_disk = $_POST["crystaldisk"];
    $limpieza_papelera_reciclaje = $_POST["limpieza_papelera_resiclaje"];
    $actualizaciones_windows_update = $_POST["actualizaciones_windows"]; // Corregido: cambiar a $actualizacionesWindowsUpdate
    $copia_seguridad_one_drive = $_POST["copia_seguridad_one_drive"];
    $desmontaje_equipo = $_POST["desmontaje_equipo"];
    $limpieza_interna = $_POST["limpieza_interna"];
    $perifericos = $_POST["perifericos"];
    $limpieza_externa = $_POST["limpieza_externa"];
    $teclado = $_POST["teclado"];
    $mause = $_POST["mause"];
    $pantalla = $_POST["pantalla"]; // Corregido: cambiar a $pantalla
    $base = $_POST["base"];
    $usb_wifi = $_POST["usb_wifi"]; // Corregido: cambiar a $usbWifi
    $multipuerto = $_POST["multipuerto"];
    $usb_ethernet = $_POST["usb_ethernet"];
    $hdmi_vga = $_POST["hdmi_vga"];
    $fecha = $_POST['fecha'];
    $n°_mantenimiento = $_POST['n°_mantenimiento']; // Corregido: cambiar a $nMantenimiento

    echo "persona_e   cargada: " . $persona_encargada . "<br>";
    echo "procesador: " . $procesador . "<br>";
    echo "marca: " . $marca . "<br>";
    echo "modelo: " . $modelo . "<br>";
    echo "disco_duro: " . $disco_duro . "<br>";
    echo "memoria_Ram: " . $memoria_RAM . "<br>";
    echo "serie: " . $serie . "<br>";
    echo "sistema_operativo: " . $sistema_operativo . "<br>";
    echo "Activo_fijo: " . $activo_fijo . "<br>";
    echo "conexion: " . $conexionTipo . "<br>";
    echo "velocidad: " . $velocidad . "<br>";
    echo "nombrepc: " . $nombre_pc . "<br>";
    echo "mac: " . $mac . "<br>";
    echo "area: " . $area . "<br>";
    echo "archivos_temporales: " . $archivos_temporales . "<br>";
    echo "antivirus: " . $antivirus . "<br>";
    echo "crystaldisk: " . $crystal_disk . "<br>";
    echo "limpieza_papelera_resiclaje: " . $limpieza_papelera_reciclaje . "<br>";
    echo "actualizaciones_windows: " . $actualizaciones_windows_update . "<br>";
    echo "copia_seguridad_one_drive: " . $copia_seguridad_one_drive . "<br>";
    echo "desmontaje_equipo: " . $desmontaje_equipo . "<br>";
    echo "limpieza_interna: " . $limpieza_interna . "<br>";
    echo "perifericos: " . $perifericos . "<br>";
    echo "limpieza_externa: " . $limpieza_externa . "<br>";
    echo "teclado: " . $teclado . "<br>";
    echo "mause: " . $mause . "<br>";
    echo "pantalla: " . $pantalla . "<br>";
    echo "base: " . $base . "<br>";
    echo "usb_wifi: " . $usb_wifi . "<br>";
    echo "multipuerto: " . $multipuerto . "<br>";
    echo "usb_ethernet: " . $usb_ethernet . "<br>";
    echo "hdmi_vga: " . $hdmi_vga . "<br>";
    echo "fecha: " . $fecha . "<br>";
    echo "n°_mantenimiento: " . $nMantenimiento . "<br>"; // Corregido: cambiar a $nMantenimiento

    $sql = "INSERT INTO informacion_pc(persona_encargada, marca, modelo, disco_duro, memoria_RAM, procesador, nombre_pc, conexion, activo_fijo, mac, sistema_operativo, serie, velocidad, perifericos, limpieza_externa, limpieza_interna, desmontaje_de_equipo, copia_de_seguridad_one_drive, actualizaciones_windows_update, limpieza_papelera_reciclaje, crystal_disk, antivirus, archivos_temporales, area, fecha, hdmi_vga, usb_ethernet, multipuerto, usb_wifi, base, pantalla, mause, teclado, n°_mantenimiento) VALUES ('$persona_encargada', '$marca', '$modelo', '$disco_duro', '$memoria_RAM', '$procesador', '$nombre_pc', '$conexionTipo', '$activoFijo', '$mac', '$sistema_operativo', '$serie', '$velocidad', '$perifericos', '$limpieza_externa', '$limpieza_interna', '$desmontaje_equipo', '$copia_seguridad_one_drive', '$actualizaciones_windows_update', '$limpieza_papelera_reciclaje', '$crystal_disk', '$antivirus', '$archivos_temporales', '$area', '$fecha', '$hdmi_vga', '$usb_ethernet', '$multipuerto', '$usb_wifi', '$base', '$pantalla', '$mause', '$teclado', '$nMantenimiento')";

     // Prepare the statement
     $conexion->query($sql);
     $stmt = $conexion->prepare($sql);

     // Bind parameters
     $stmt->bind_param("ssssssssssssssssssssssssssssssssss", $personaEncargada, $marca, $modelo, $discoDuro, $memoriaRAM, $procesador, $nombrePC, $conexionTipo, $activoFijo, $mac, $sistemaOperativo, $serie, $velocidad, $perifericos, $limpiezaExterna, $limpiezaInterna, $desmontajeEquipo, $copiaSeguridadOneDrive, $actualizacionesWindowsUpdate, $limpiezaPapeleraReciclaje, $crystaldisk, $antivirus, $archivosTemporales, $area, $fecha, $hdmiVga, $usbEthernet, $multipuerto, $usbWifi, $base, $pantalla, $mause, $teclado, $nMantenimiento);

     // Execute the statement
     $stmt->execute();
 
     // Close the statement
     $stmt->close();
    
}
?>

																																																																				