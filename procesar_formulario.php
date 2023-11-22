<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Aquí obtienes los datos del formulario
    $personaEncargada = $_POST['personaEncargada'];
    $procesador = $_POST['procesador'];
    // Puedes obtener los otros campos de la misma manera

    // Aquí puedes hacer lo que desees con los datos, como almacenarlos en una base de datos, enviar un correo electrónico, etc.

    // Por ejemplo, solo imprimo los datos por ahora:
    echo "Persona encargada: " . $personaEncargada . "<br>";
    echo "Procesador: " . $procesador . "<br>";
    // Puedes imprimir los otros campos de la misma manera.
}
?>
