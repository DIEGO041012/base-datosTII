<?php
require_once 'conexiondatabase.php';

class Procesar {
    private $conexion;

    public function __construct() {
        $this->conexion = conectarBD();
    }

    public function procesarInformacionPC($data) {
        $sql = "INSERT INTO informacion_pc (personaEncargada, procesador, marca, modelo, disco_duro, memoria_RAM, serie, sistema_operativo, activo_fijo, conexión, velocidad, nombre_pc, mac, area, archivos_temporales, antivirus, revisionInformacion, fecha, n°_mantenimiento, limpieza_papelera_reciclaje, crystal_disk, actualizacion_Windows_update, Copia_de_seguridad_one_drive, desmontaje_de_equipo, limpieza_interna, perifericos, limpieza_externa, tecla, mause, pantalla, base, usb_Wifi, multipuerto, teclado, usb_ethernet, hdmi_vga) 
            VALUES ('{$data['personaEncargada']}', '{$data['procesador']}', '{$data['Marca']}', '{$data['modelo']}', '{$data['discoDuro']}', '{$data['memoriaRam']}', '{$data['Serie']}', '{$data['sistemaOperativo']}', '{$data['ActivoFijo']}', '{$data['Conexion']}', '{$data['Velocidad']}', '{$data['NombrePc']}', '{$data['MAC']}', '{$data['area']}', '{$data['archivosTemporales']}', '{$data['revicionAntivirus']}', '{$data['crystaldisk']}', '{$data['limpiezaPapeleraResiclaje']}', '{$data['actualizacionesWindows']}', '{$data['copiaSeguridadOneDrive']}', '{$data['desmontajeEquipo']}', '{$data['limpiezaInterna']}', '{$data['perifericos']}', '{$data['limpiezaExterna']}', '{$data['teclado']}', '{$data['mause']}', '{$data['pantalla']}', '{$data['base']}', '{$data['usbWifi']}', '{$data['multipuerto']}', '{$data['usbEthernet']}', '{$data['hdmiVga']}', '{$data['fecha']}', '{$data['nMantenimiento']}')";

        return $this->conexion->query($sql);
    }

    public function procesarIngreso($email, $contrasena) {
        $sql = "SELECT * FROM ingreso WHERE email = '$email' AND contraseña = '$contrasena'";
        return $this->conexion->query($sql);
    }

    public function procesarInventario($tipo, $cantidad, $fecha) {
        $sql = "SELECT * FROM inventario WHERE tipo = '{$tipo}'";
        $resultado = $this->conexion->query($sql);
        $fila = $resultado->fetch_assoc();
        $cantidadNumerica = intval($fila['cantidad']) + intval($cantidad);

        $sql1 = "UPDATE inventario SET cantidad = $cantidadNumerica, fecha = '$fecha', fechaSistema = CURRENT_TIMESTAMP() WHERE tipo = '$tipo'";
        return $this->conexion->query($sql1);
    }

    public function procesarPrestamo($area_asignada, $nombre_apellido, $tipo, $fecha) {
        $sql = "INSERT INTO prestamos(area, nombres, tipo, fecha_ingreso) VALUES ('$area_asignada','$nombre_apellido','$tipo','$fecha')";
        return $this->conexion->query($sql);
    }

    public function procesarUsuarioEquipo($area, $nombre, $password, $articulo, $fecha) {
        $sql = "INSERT INTO usuario_equipo(area, nombre, contraseña, articulo, fecha_ingreso) VALUES ('$area','$nombre','$password','$articulo','$fecha')";
        return $this->conexion->query($sql);
    }
}
?>
