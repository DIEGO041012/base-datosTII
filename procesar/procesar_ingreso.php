<?php
require 'conexiondatabase.php';

if ($_SERVER["REQUEST_METHOD"] === "POST" && isset($_POST['formSubmitted'])) {
    // Aquí obtienes los datos del formulario
    $email = $_POST['email'];
    $contraseña = $_POST['contraseña'];
   
    // Consulta para verificar las credenciales en la base de datos
    $conexion = conectarBD();
    $sql = "SELECT * FROM ingreso WHERE email = '$email' AND contraseña = '$contraseña'";
    $resultado = $conexion->query($sql);

    if ($resultado->num_rows > 0) {
        // Credenciales válidas, redirige a la siguiente página
        header("Location: siguiente_pagina.php");
        exit();
    } else {
        // Credenciales inválidas, puedes mostrar un mensaje de error o redirigir a una página de error
        echo "Credenciales incorrectas";
    }

    // Cierra la conexión
    $conexion->close();
}
?>
