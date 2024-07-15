<?php
include('base1conexion.php');
$conexion = conectarBD();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="../public/img/css/principal.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Prestamos TI</title>
</head>
<body>

<?php include 'heard.html'; ?>

<section class="container mt-4 text-center">
    <img src="" alt="" class="img-fluid" style="max-width: 200px;">
    <h1 class="sm:text-center text-5xl">Prestamos TI</h1>
    <br><br>
</section>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Formulario de Prestamos TI
        </div>
        <div class="card-body">
            <form id="miFormulario" class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
                        Área de asignación
                    </label>
                    <select class="form-select" id="grid-dependencia" name="asignacion" required>
                        <option>Calidad</option>
                        <option>Gestión Humana</option>
                        <option>CDN</option>
                        <option>Contabilidad</option>
                        <option>Larga vida</option>
                        <option>Ventas</option>
                        <option>Comercio exterior</option>
                        <option>Call center</option>
                        <option>Cartera</option>
                        <option>Presedencia</option>
                        <option>Laboratorio</option>
                        <option>Producción</option>
                        <option>TI</option>
                        <option>Compras</option>
                        <option>Área Técnica</option>
                        <option>Mantenimiento</option>
                        <option>Oficina almacen</option>
                        <option>Logística</option>
                        <option>Planeación de la demanda</option>
                        <option>Selección</option>
                        <option>Agencia Medellín</option>
                        <option>Proyectos riesgos</option>
                        <option>Charcutería</option>
                        <option>Portería</option>
                        <option>Recepción</option>
                        <option>Tesorería</option>
                        <option>Empaques</option>
                        <option>Cava AG Medellín</option>
                        <option>Carnicería</option>
                        <option>Combos</option>
                        <option>Todo en uno (empaques)</option>
                        <option>Hornos</option>
                        <option>Primavera</option>
                        <option>Frio DAN</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nombre">
                        Nombre/Apellido
                    </label>
                    <input name="nombres" class="form-control" id="grid-nombre" type="text" placeholder="Nombre" required>
                </div>
                <div class="col-md-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-tipo">
                        Tipo
                    </label>
                    <select class="form-select" id="grid-tipo" name="tipo" required>
                        <option value="Teclado">Teclado</option>
                        <option value="Teclado_numerico">Teclado numérico</option>
                        <option value="Mouse">Mouse</option>
                        <option value="Pantalla">Pantalla</option>
                        <option value="Base">Base</option>
                        <option value="Usb_wifi">USB/WiFi</option>
                        <option value="Usb_ethernet">USB Ethernet</option>
                        <option value="Usb_vga">USB/VGA</option>
                        <option value="Multipuerto">Multipuerto</option>
                        <option value="SSD_240gb">Disco Sólido 240GB</option>
                        <option value="SSD_480gb">Disco Sólido 480GB</option>
                        <option value="M.2_500GB">M2 500GB</option>
                        <option value="M.2_256">M2 256GB</option>
                        <option value="Cable_hdmi">Cable HDMI</option>
                        <option value="Cable_hdmi_vga">Cable HDMI/VGA</option>
                        <option value="Cable_vga">Cable VGA</option>
                    </select>
                </div>
                <div class="col-md-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-fecha-tentativa">
                        Fecha de asignación
                    </label>
                    <input name="fecha" class="form-control" id="grid-fecha-tentativa" type="date" placeholder="Fecha Tentativa" required>
                    <input type="hidden" name="formSubmitted" value="1">
                </div>
                <div class="col-md-12">
                    <button id="guardar" class="btn btn-primary" type="button">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
<script src="../public/img/js/prestamos.js"></script>
</body>
</html>
