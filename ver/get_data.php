<?php
function conectarBD(){
    $servidor = "localhost";
    $usuario = "root";
    $contraseña = "HnvPhkdaVeZ4pD";
    $basedatos = "area_ti";
    
    $conexion = new mysqli($servidor, $usuario, $contraseña, $basedatos);
    
    if($conexion->connect_errno){
        die("Error: ".$conexion->connect_errno);
    }
    return $conexion;
}

function obtenerDatosFormularioInformacionpc() {
    $conexion = conectarBD();
    $query = "SELECT modelo, COUNT(*) as cantidad FROM formulario_informacionpc GROUP BY modelo";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}


function obtenerDatosFormulariosExistencias(){
    $conexion = conectarBD();
    $query = "SELECT fecha, cantidad FROM formularios_existencias";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosFormulariosInventario(){
    $conexion = conectarBD();
    $query = "SELECT fecha_ingreso, cantidad FROM formularios_inventario";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosFormulariosPrestamos() {
    $conexion = conectarBD();
    $query = "SELECT articulo, COUNT(*) as cantidad FROM formularios_prestamos GROUP BY articulo";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}


function obtenerDatosFormulariosUsuarios() {
    $conexion = conectarBD();
    $query = "SELECT fecha, COUNT(nombre_responsable) as cantidad_responsables FROM formularios_usuarios GROUP BY fecha";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}


$datos = array(
    "formulario_informacionpc" => obtenerDatosFormularioInformacionpc(),
    "formularios_existencias" => obtenerDatosFormulariosExistencias(),
    "formularios_inventario" => obtenerDatosFormulariosInventario(),
    "formularios_prestamos" => obtenerDatosFormulariosPrestamos(),
    "formularios_usuarios" => obtenerDatosFormulariosUsuarios()
);

header('Content-Type: application/json');
echo json_encode($datos);
?>
