<?php
  require './conexiondatabase.php';

  $conexion = conectarBD();

// Verifica si el formulario ha sido enviado
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Recupera los datos del formulario
    $personaEncargada = $_POST["personaEncargada"];
    $procesador = $_POST["procesador"];
    $marca = $_POST["Marca"];
    $modelo = $_POST["modelo"];
    $discoDuro = $_POST["discoDuro"]; // Asegúrate de asignar el nombre correcto
    $memoriaRAM = $_POST["memoriaRam"]; // Asegúrate de asignar el nombre correcto
    $serie = $_POST["Serie"];
    $sistemaOperativo = $_POST["sistemaOperativo"]; // Asegúrate de asignar el nombre correcto
    $activoFijo = $_POST["ActivoFijo"];
    $conexionTipo = $_POST["Conexion"];
    $velocidad = $_POST["Velocidad"];
    $nombrePC = $_POST["NombrePc"];
    $mac = $_POST["MAC"];
    $area = $_POST["area"]; // Asegúrate de asignar el nombre correcto
    $archivosTemporales = $_POST["archivosTemporales"]; // Asegúrate de asignar el nombre correcto
    $antivirus = $_POST["revicionAntivirus"]; // Asegúrate de asignar el nombre correcto
    $crystaldisk = $_POST["crystaldisk"]; // Asegúrate de asignar el nombre correcto
    $limpiezaPapeleraReciclaje = $_POST["limpiezaPapeleraResiclaje"]; // Asegúrate de asignar el nombre correcto
    $actualizacionesWindows = $_POST["actualizacionesWindows"]; // Asegúrate de asignar el nombre correcto
    $copiaSeguridadOneDrive = $_POST["copiaSeguridadOneDrive"]; // Asegúrate de asignar el nombre correcto
    $desmontajeEquipo = $_POST["desmontajeEquipo"]; // Asegúrate de asignar el nombre correcto
    $limpiezaInterna = $_POST["limpiezaInterna"]; // Asegúrate de asignar el nombre correcto
    $perifericos = $_POST["perifericos"]; // Asegúrate de asignar el nombre correcto
    $limpiezaExterna = $_POST["limpiezaExterna"]; // Asegúrate de asignar el nombre correcto
    $teclado = $_POST["teclado"];
    $mause = $_POST["mause"];
    $pantalla = $_POST["pantalla"];
    $base = $_POST["base"];
    $usbWifi = $_POST["usbWifi"];
    $multipuerto = $_POST["multipuerto"];
    $usbEthernet = $_POST["usbEthernet"];
    $hdmiVga = $_POST["hdmiVga"];
    $fecha = $_POST["fecha"];
    $nMantenimiento = $_POST["nMantenimiento"];
    // Query SQL para insertar los datos en la tabla
    $sql = "INSERT INTO informacion_pc (personaEncargada, procesador, marca, modelo, disco_duro, memoria_RAM, serie, sistema_operativo, activo_fijo, conexión, velocidad, nombre_pc, mac, area, archivos_temporales, antivirus, revisionInformacion, fecha, n°_mantenimiento limpieza_papelera_reciclaje, crystal_disk, actualizacion_Windows_update, Copia_de_seguridad_one_drive, desmontaje_de_equipo, limpieza_interna, perifericos, limpieza_externa,tecla,mause,pantalla, base, usb_Wifi, multipuerto, teclado, usb_ethernet,hdmi_vga) VALUES ('$personaEncargada', '$procesador', '$marca', '$modelo', '$discoDuro', '$memoriaRAM', '$serie', '$sistemaOperativo', '$activoFijo', '$conexionTipo', '$velocidad', '$nombrePC', '$mac', '$area', '$archivosTemporales', '$revisionAntivirus', '$revisionInformacion', '$limpiezaPapeleraReciclaje', '$revisionActualizacionesWindows', '$revisarCopiaSeguridadOneDrive', '$desmontajeEquipo', '$limpiezaInterna', '$perifericos', '$limpiezaExterna','$teclado','$mause','$pantalla','$base','$usbWifi','$multipuerto','$usbEthernet','$hdmiVga','$fecha','$n°mantenimiento')";


    if ($conexion->query($sql) === TRUE) {
        echo "Datos insertados correctamente";
    } else {
        echo "Error al insertar datos: " . $conexion->error;
    }

    // Cierra la conexión
    $conexion->close();
}
?>