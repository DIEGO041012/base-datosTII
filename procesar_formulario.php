<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
    $personaEncargada = $_POST['personaEncargada'];
    $procesador = $_POST['procesador'];
    $marca = $_POST["Marca"];
    $modelo = $_POST["modelo"];
    $discoDuro = $_POST["discoDuro"]; // Asegúrate de asignar el nombre correcto
    $memoriaRAM = $_POST["memoria_Ram"]; // Asegúrate de asignar el nombre correcto
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
    // Puedes obtener los otros campos de la misma manera

    // Por ejemplo, solo imprimo los datos por ahora:
    echo "Persona encargada: " . $personaEncargada . "<br>";
    echo "Procesador: " . $procesador . "<br>";
    echo "marca: " . $marca . "<br>";
    echo "modelo: " . $modelo . "<br>";
    echo "Procesador: " . $procesador . "<br>";
    echo "velocidad: " . $velocidad . "<br>";
    echo "discoDuro: " . $discoDuro . "<br>";
    echo "memoriaRAM: " . $memoriaRAM . "<br>";
    echo "serie: " . $serie . "<br>";
    echo "activoFijo: " . $activoFijo . "<br>";
    echo "conexion: " . $conexion . "<br>";
    echo "sistemaOperativo: " . $sistemaOperativo . "<br>";
    echo "nombrePC: " . $nombrePC . "<br>";
    echo "mac: " . $mac . "<br>";
    echo "area: " . $area . "<br>";
    echo "archivosTemporales: " . $archivosTemporales . "<br>";
    echo "antivirus: " . $antivirus . "<br>";
    echo "crystaldisk: " . $crystaldisk . "<br>";
    echo "limpiezaPapeleraReciclaje: " . $limpiezaPapeleraReciclaje . "<br>";
    echo "actualizacionesWindows: " . $actualizacionesWindows . "<br>";
    echo "copiaSeguridadOneDrive: " . $copiaSeguridadOneDrive . "<br>";
    echo "desmontajeEquipo: " . $desmontajeEquipo . "<br>";
    echo "limpiezaInterna: " . $limpiezaInterna . "<br>";
    echo "limpiezaExterna: " . $limpiezaExterna . "<br>";
    echo "perifericos: " . $perifericos . "<br>";
    echo "teclado: " . $teclado . "<br>";
    echo "mause: " . $mause . "<br>";
    echo "base: " . $base . "<br>";
    echo "usbWifi: " . $usbWifi . "<br>";
    echo "multipuerto: " . $multipuerto . "<br>";
    echo "usbEthernet: " . $usbEthernet . "<br>";
    echo "hdmiVga: " . $hdmiVga . "<br>";
    // Puedes imprimir los otros campos de la misma manera.

    $sql = "INSERT INTO informacion_pc (persona_encargada, procesador, marca, modelo, disco_duro, memoria_RAM, serie, sistemaOperativo, activoFijo, conexionTipo, velocidad, nombrePC, mac, area, archivosTemporales, revisionAntivirus, revisionInformacion, limpiezaPapeleraReciclaje, actualizacionesWindows, copiaSeguridadOneDrive, desmontajeEquipo, limpiezaInterna, perifericos, limpiezaExterna,tecla,mause,pantalla,base,usbWifi,multipuerto,usbEthernet,hdmiVga) VALUES ('$personaEncargada', '$procesador', '$marca', '$modelo', '$discoDuro', '$memoriaRAM', '$serie', '$sistemaOperativo', '$activoFijo', '$conexionTipo', '$velocidad', '$nombrePC', '$mac', '$area', '$archivosTemporales', '$revisionAntivirus', '$revisionInformacion', '$limpiezaPapeleraReciclaje', '$revisionActualizacionesWindows', '$revisarCopiaSeguridadOneDrive', '$desmontajeEquipo', '$limpiezaInterna', '$perifericos', '$limpiezaExterna','$teclado','$mause','$pantalla','$base','$usbWifi','$multipuerto','$usbEthernet','$hdmiVga')";
    $conexion->query($sql);
}
?>
