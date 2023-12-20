<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
    $personaEncargada = $_POST['personaEncargada'];
    $procesador = $_POST['procesador'];
    $marca = $_POST["marca"];
    $modelo = $_POST["modelo"];
    $discoDuro = $_POST["disco_duro"];
    $memoriaRAM = $_POST["memoria_Ram"];
    $serie = $_POST["serie"];
    $sistemaOperativo = $_POST["sistema_operativo"];
    $activoFijo = $_POST["Activo_fijo"];
    $conexionTipo = $_POST["conexion"]; // Corregido: cambiar a $conexionTipo
    $velocidad = $_POST["velocidad"];
    $nombrePC = $_POST["nombrepc"]; // Corregido: cambiar a $nombrePC
    $mac = $_POST["mac"];
    $area = $_POST["area"];
    $archivosTemporales = $_POST["archivos_temporales"];
    $antivirus = $_POST["antivirus"];
    $crystaldisk = $_POST["crystaldisk"];
    $limpiezaPapeleraReciclaje = $_POST["limpieza_papelera_resiclaje"];
    $actualizacionesWindowsUpdate = $_POST["actualizaciones_windows"]; // Corregido: cambiar a $actualizacionesWindowsUpdate
    $copiaSeguridadOneDrive = $_POST["copia_seguridad_one_drive"];
    $desmontajeEquipo = $_POST["desmontaje_equipo"];
    $limpiezaInterna = $_POST["limpieza_interna"];
    $perifericos = $_POST["perifericos"];
    $limpiezaExterna = $_POST["limpieza_externa"];
    $teclado = $_POST["teclado"];
    $mause = $_POST["mause"];
    $pantalla = $_POST["pantalla"]; // Corregido: cambiar a $pantalla
    $base = $_POST["base"];
    $usbWifi = $_POST["usb_wifi"]; // Corregido: cambiar a $usbWifi
    $multipuerto = $_POST["multipuerto"];
    $usbEthernet = $_POST["usb_ethernet"];
    $hdmiVga = $_POST["hdmi_vga"];
    $fecha = $_POST['fecha'];
    $n°_antenimiento = $_POST['n°_mantenimiento']; // Corregido: cambiar a $nMantenimiento

    echo "personaEncargada: " . $personaEncargada . "<br>";
    echo "procesador: " . $procesador . "<br>";
    echo "marca: " . $marca . "<br>";
    echo "modelo: " . $modelo . "<br>";
    echo "disco_duro: " . $discoDuro . "<br>";
    echo "memoria_Ram: " . $memoriaRAM . "<br>";
    echo "serie: " . $serie . "<br>";
    echo "sistema_operativo: " . $sistemaOperativo . "<br>";
    echo "Activo_fijo: " . $activoFijo . "<br>";
    echo "conexion: " . $conexionTipo . "<br>";
    echo "velocidad: " . $velocidad . "<br>";
    echo "nombrepc: " . $nombrePC . "<br>";
    echo "mac: " . $mac . "<br>";
    echo "area: " . $area . "<br>";
    echo "archivos_temporales: " . $archivosTemporales . "<br>";
    echo "antivirus: " . $antivirus . "<br>";
    echo "crystaldisk: " . $crystaldisk . "<br>";
    echo "limpieza_papelera_resiclaje: " . $limpiezaPapeleraReciclaje . "<br>";
    echo "actualizaciones_windows: " . $actualizacionesWindowsUpdate . "<br>";
    echo "copia_seguridad_one_drive: " . $copiaSeguridadOneDrive . "<br>";
    echo "desmontaje_equipo: " . $desmontajeEquipo . "<br>";
    echo "limpieza_interna: " . $limpiezaInterna . "<br>";
    echo "perifericos: " . $perifericos . "<br>";
    echo "limpieza_externa: " . $limpiezaExterna . "<br>";
    echo "teclado: " . $teclado . "<br>";
    echo "mause: " . $mause . "<br>";
    echo "pantalla: " . $pantalla . "<br>";
    echo "base: " . $base . "<br>";
    echo "usb_wifi: " . $usbWifi . "<br>";
    echo "multipuerto: " . $multipuerto . "<br>";
    echo "usb_ethernet: " . $usbEthernet . "<br>";
    echo "hdmi_vga: " . $hdmiVga . "<br>";
    echo "fecha: " . $fecha . "<br>";
    echo "n°_mantenimiento: " . $n°_antenimiento . "<br>"; // Corregido: cambiar a $nMantenimiento

    $sql = "INSERT INTO informacion_pc(persona_encargada, marca, modelo, disco_duro, memoria_RAM, procesador, nombre_pc, conexion, activo_fijo, mac, sistema_operativo, serie, velocidad, perifericos, limpieza_externa limpieza_interna, desmontaje_de_equipo, copia_de_seguridad_one_drive, actualizaciones_windows_update, limpieza_papelera_reciclaje, crystal_disk, antivirus, archivos_temporales, area, fecha, hdmi_vga, usb_ethernet, multipuerto, usb_wifi, base, pantalla, mause, teclado, n°_mantenimiento) VALUES ('$personaEncargada', '$marca', '$modelo', '$discoDuro', '$memoriaRAM', '$procesador', '$nombrePC', '$conexionTipo', '$activoFijo', '$mac', '$sistemaOperativo', '$serie', '$velocidad', '$perifericos', '$limpiezaExterna', '$limpiezaInterna', '$desmontajeEquipo', '$copiaSeguridadOneDrive', '$actualizacionesWindowsUpdate', '$limpiezaPapeleraReciclaje', '$crystaldisk', '$antivirus', '$archivosTemporales', '$area', '$fecha', '$hdmiVga', '$usbEthernet', '$multipuerto', '$usbWifi', '$base', '$pantalla', '$mause', '$teclado', '$n°_mantenimiento')";

    $conexion->query($sql);
    
}
?>