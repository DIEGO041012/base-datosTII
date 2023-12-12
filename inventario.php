<?php

include('base1conexion.php');

conectarBD();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Inventario</title>
</head>
<body>
    <div class="">
        <img src="./img/logo_dan-removebg-preview.png" alt="logo" class="mx-auto h-54 w-64" >
    </div>
  <h1 class="sm:text-center text-5xl">
    inventario bodega
  </h1>
  <br><br>
  
  <hr><hr><hr>
  <br>
  <div class="flex justify-center">
    <form class="w-full max-w-lg">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
            Tipo
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dependencia" type="text" name = "tipo" placeholder="Dependencia">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" name = "cantidad" for="grid-prioridad">
            Cantidad
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-prioridad" type="text" placeholder="Prioridad">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" name = "fecha" for="grid-fecha-tentativa">
            Fecha Ingreso
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-fecha-tentativa" type="date" name="fecha" placeholder="Fecha Tentativa">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
            Guardar
          </button>
        </div>
      </div>
    </form>
  </div>
  
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
  <script src="inventario.js"></script>

</body>
</html>