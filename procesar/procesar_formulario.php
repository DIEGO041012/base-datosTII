<?php
require './conexiondatabase.php';

$conexion = conectarBD();

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
    $persona_encargada = mysqli_escape_string($conexion,$_POST['personaEncargada']);
    $procesador = mysqli_escape_string($conexion,$_POST['procesador']);
    $marca = mysqli_escape_string($conexion,$_POST["Marca"]);
    $modelo = mysqli_escape_string($conexion,$_POST["modelo"]);
    $disco_duro = mysqli_escape_string($conexion,$_POST["disco_duro"]);
    $memoria_RAM = mysqli_escape_string($conexion,$_POST["memoria_RAM"]);
    $serie = mysqli_escape_string($conexion,$_POST["serie"]);
    $sistema_operativo = mysqli_escape_string($conexion,$_POST["sistema_operativo"]);
    $activo_fijo = mysqli_escape_string($conexion,$_POST["Activo_fijo"]);
    $conexionTipo = mysqli_escape_string($conexion,$_POST["conexion"]);
    $velocidad = mysqli_escape_string($conexion,$_POST["Velocidad"]);
    $nombre_pc = mysqli_escape_string($conexion,$_POST["Nombre_pc"]);
    $mac = mysqli_escape_string($conexion,$_POST["MAC"]);
    $area = mysqli_escape_string($conexion,$_POST["area"]);
    $archivos_temporales = mysqli_escape_string($conexion,$_POST["archivos_temporales"]);
    $antivirus = mysqli_escape_string($conexion,$_POST["antivirus"]);
    $crystal_disk = mysqli_escape_string($conexion,$_POST["cystal_disk"]);
    $limpieza_papelera_reciclaje = mysqli_escape_string($conexion,$_POST["limpieza_papelera_reciclaje"]);
    $actualizaciones_windows_update = mysqli_escape_string($conexion,$_POST["actualizacion_windows_update"]);
    $copia_seguridad_one_drive = mysqli_escape_string($conexion,$_POST["copia_de_seguridad_one_drive"]);
    $desmontaje_equipo = mysqli_escape_string($conexion,$_POST["desmontaje_de_equipo"]);
    $limpieza_interna = mysqli_escape_string($conexion,$_POST["limpieza_interna"]);
    $perifericos = mysqli_escape_string($conexion,$_POST["perifericos"]);
    $limpieza_externa = mysqli_escape_string($conexion,$_POST["limpieza_externa"]);
    $teclado = isset($_POST["teclado"]) ? 'SI' : 'NO';
    $mause = isset($_POST["mause"]) ? 'SI' : 'NO';
    $pantalla = isset($_POST["pantalla"]) ? 'SI' : 'NO';
    $base = isset($_POST["base"]) ? 'SI' : 'NO';
    $usb_wifi = isset($_POST["usb_wifi"]) ? 'SI' : 'NO';
    $multipuerto = isset($_POST["multipuerto"]) ? 'SI' : 'NO';
    $usb_ethernet = isset($_POST["usb_ethernet"]) ? 'SI' : 'NO';
    $hdmi_vga = isset($_POST["hdmi_vga"]) ? 'SI' : 'NO';
    $fecha = $_POST['fecha'];
    // $n_mantenimiento = $_POST['n_mantenimiento'];

    // Imprimir datos para verificar que se obtienen correctamente
    echo "persona_encargada: " . $persona_encargada . "<br>";
    echo "procesador: " . $procesador . "<br>";
    echo "marca: " . $marca . "<br>";
    echo "modelo: " . $modelo . "<br>";
    // ... (continuar con los demás campos)

    // Consulta SQL (cambiar a la corrección que hice antes)
    $sql = "INSERT INTO informacion_pc (persona_encargada, marca, modelo, disco_duro, memoria_RAM, procesador, nombre_pc, conexion, activo_fijo, mac, sistema_operativo, serie, velocidad, perifericos, limpieza_externa, limpieza_interna, desmontaje_de_equipo, copia_de_seguridad_one_drive, actualizacion_windows_update, limpieza_papelera_reciclaje, crystal_disk, antivirus, archivos_temporales, area, hdmi_vga, usb_ethernet, multipuerto, usb_wifi, base, pantalla, mause, teclado) VALUES ('{$persona_encargada}', '{$marca}', '{$modelo}', '{$disco_duro}', '{$memoria_RAM}', '{$procesador}', '{$nombre_pc}', '{$conexionTipo}', $activo_fijo, '{$mac}', '{$sistema_operativo}', '{$serie}', '{$velocidad}', '{$perifericos}', '{$limpieza_externa}', '{$limpieza_interna}', '{$desmontaje_equipo}', '{$copia_seguridad_one_drive}', '{$actualizaciones_windows_update}', '{$limpieza_papelera_reciclaje}', '{$crystal_disk}', '{$antivirus}', '{$archivos_temporales}', '{$area}','{$hdmi_vga}', '{$usb_ethernet}', '{$multipuerto}', '{$usb_wifi}', '{$base}', '{$pantalla}', '{$mause}', '{$teclado}')";

    // Prepare the statement
    
    $conexion->query($sql);

  
}
?>
																				