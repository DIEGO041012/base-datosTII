<?php
include('base1conexion.php');
conectarBD();
?>

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="../public/img/css/principal.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Cronograma</title>
</head>
<body>

<?php include 'heard.html'; ?>

<section class="container mt-4 text-center">
    <img src="./img/logo_dan-removebg-preview.png" alt="" class="img-fluid" style="max-width: 200px;">
    <h1 class="sm:text-center text-5xl">Cronograma</h1>
    <br><br>
</section>

<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Formulario de Cronograma
        </div>
        <div class="card-body">
            <form id="miFormulario" class="row g-3 needs-validation" novalidate>
                <div class="col-md-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
                        Mantenimiento
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dependencia" type="text" name="mantenimiento" placeholder="Dependencia" required>
                </div>
                <div class="col-md-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-prioridad">
                        Nombre
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-prioridad" type="text" name="nombre" placeholder="Prioridad" required>
                </div>
                <div class="col-md-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-area">
                        Area
                    </label>
                    <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-area" type="text" name="area" placeholder="Area" required>
                </div>
                <div class="col-md-6">
                    <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-fecha-tentativa">
                        Fecha
                    </label>
                    <input name="fecha" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-fecha-tentativa" type="date" placeholder="Fecha Tentativa" required>
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

<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src="./js/cronograma.js"></script>
<script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
<script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
<script src="https://cdn.tailwindcss.com"></script>
</body>
</html>
