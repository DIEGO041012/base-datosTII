<?php

    include('base1conexion.php');

    $conexion = conectarBD();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
   <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
   <link rel="stylesheet" href="../public/img/css/principal.css">
   <link rel="stylesheet" href="../public/img/css/usuario.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <title>usuarios</title>
</head>
<body>

<?php include 'heard.html'; ?> 

    <div class="">
        <img src="../public/img/logodan.png" alt="logo" class="mx-auto h-54 w-64" >
    </div>
  <h1 class="sm:text-center text-5xl">
    Usuarios equipos
  </h1>
  <br><br>
  <br>
  <div class="flex justify-center">
    <form id="miFormulario" class="w-full max-w-lg">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
           Area 
          </label>
          <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dependencia" name="area">
                    <option>Calidad</option>
                    <option>Gestion Humana</option>
                    <option>CDN</option>
                    <option>Contabilidad</option>
                    <option>Larga vida</option>
                    <option>Ventas</option>
                    <option>Comercio exterior</option>
                    <option>Call center</option>
                    <option>Cartera</option>
                    <option>Presedencia</option>
                    <option>Laboratorio</option>
                    <option>Produccion</option>
                    <option>TI</option>
                    <option>Compras</option>
                    <option>Area Tecnica</option>
                    <option>Mantenimiento</option>
                    <option>Oficina almacen</option>
                    <option>Logistica</option>
                    <option>Planeacion de la demanda</option>
                    <option>Seleccion</option>
                    <option>Agencia medellin</option>
                    <option>Proyectos riesgos</option>
                    <option>Charcuteria</option>
                    <option>Porteria</option>
                    <option>Resepcion</option>
                    <option>Tesoreria</option>
                    <option>Empaquez</option>
                    <option>Cava AG medellin</option>
                    <option>Carniceria</option>
                    <option>Combos</option>
                    <option>Todo en uno (empaques)</option>
                    <option>Hornos</option>
                    <option>Primavera</option>
                    <option>Frio DAN</option>
                    <option>Almacen MPNC</option>
                  </select> 
          
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nombre">
            Usiario del equipos
          </label>
          <input name="nombre" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nombre" type="name" placeholder="nombre">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nombre">
            Contraseña
          </label>
          <input name="contraseña" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nombre" type="text" placeholder="contraseña">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
          Articulo
        </label>
        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dependencia" name="articulo">
          <option value="Portatil">Portatil</option>
          <option value="Torre">Torre</option>
        </select>
      </div>
    </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-fecha-tentativa">
            Fecha de asignacion
          </label>
          <input name="fecha" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-fecha-tentativa" type="date" placeholder="Fecha Tentativa">
          <input type="hidden" name="formSubmitted" value="1">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <button id="guardar" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button">
            Guardar
          </button>
        </div>
      </div>
    </form>
  </div>
  
  
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="../public/img/js/usuarioequipo.js"></script>
</body>
</html>