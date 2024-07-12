<?php
function conectarBD(){
    $servidor="localhost";
    $usuario="root";
    $contraseña="HnvPhkdaVeZ4pD";
    $basedatos="base_datos_cimbrdos";
    
    $conexion=new mysqli($servidor,$usuario,$contraseña,$basedatos);
    
    if($conexion->connect_errno){
        die("Error:".$conexion->connect_errno);
    }
    return $conexion;
}

function obtenerDatosOrdenes(){
    $conexion = conectarBD();
    $query = "SELECT fecha, cantidad FROM ordenes";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosRequisiciones(){
    $conexion = conectarBD();
    $query = "SELECT fechaSistema, cantidad FROM requisiciones";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosProductosTotales(){
    $conexion = conectarBD();
    $query = "SELECT numero_op, gran_total FROM productos_totales";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosProductos(){
    $conexion = conectarBD();
    $query = "SELECT fechaSistema, valor_total_prod FROM productos";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosMaterialesPorProducto(){
    $conexion = conectarBD();
    $query = "SELECT codigo_producto, SUM(cantidad) as total_cantidad FROM materiales_por_producto GROUP BY codigo_producto";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosProductosLineaBlanca(){
    $conexion = conectarBD();
    $query = "SELECT codigo_producto, nombre_producto FROM productos WHERE proceso = 'Proceso 1, Proceso 2, Proceso 3'";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosProductosLineaGris(){
    $conexion = conectarBD();
    $query = "SELECT codigo_producto, nombre_producto FROM productos WHERE proceso = 'Proceso 1'";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosProductosOP(){
    $conexion = conectarBD();
    $query = "SELECT numero_op, cantidad_producto, total FROM productos_op";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}
function obtenerDatosActivoPlanta(){
    $conexion = conectarBD();
    $query = "SELECT nombre, cargo FROM activo_planta";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosActivoObra(){
    $conexion = conectarBD();
    $query = "SELECT Nombre, Cargo FROM activo_obra";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}

function obtenerDatosEmpleadosPorCargo(){
    $conexion = conectarBD();
    $query = "SELECT Cargo, COUNT(*) as total FROM empleados GROUP BY Cargo";
    $result = $conexion->query($query);
    $data = array();
    while($row = $result->fetch_assoc()){
        $data[] = $row;
    }
    $conexion->close();
    return $data;
}
$datos = array(
    "ordenes" => obtenerDatosOrdenes(),
    "requisiciones" => obtenerDatosRequisiciones(),
    "productos_totales" => obtenerDatosProductosTotales(),
    "productos" => obtenerDatosProductos(),
    "materiales_por_producto" => obtenerDatosMaterialesPorProducto(),
    "productos_linea_blanca" => obtenerDatosProductosLineaBlanca(),
    "productos_linea_gris" => obtenerDatosProductosLineaGris(),
    "productos_op" => obtenerDatosProductosOP(),
    "activo_planta" => obtenerDatosActivoPlanta(),
    "activo_obra" => obtenerDatosActivoObra(),
    "empleados_por_cargo" => obtenerDatosEmpleadosPorCargo()
);

header('Content-Type: application/json');
echo json_encode($datos);
?>
