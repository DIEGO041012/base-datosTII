<?php

    include('base1conexion.php');

    $conexion = conectarBD();



?>

!doctype html>
<html>
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://cdn.tailwindcss.com"></script>
  <link rel="stylesheet" href="./asd.css">
  <title>Cronograma</title>
</head>
<body>
    <div class="">
        <img src="./img/logo_dan-removebg-preview.png" alt="logo" class="mx-auto h-54 w-64" >
    </div>
  <h1 class="sm:text-center text-5xl">
    Cronograma
  </h1>
  <br><br>
  
  <hr><hr><hr>
  <br>
  <div class="flex justify-center">
    <form class="w-full max-w-lg">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
            Mantenimientos asignados
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dependencia" type="text" placeholder="Dependencia">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nombre">
            Nombre
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nombre" type="text" placeholder="Nombre">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nombre">
            Area
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nombre" type="text" placeholder="Nombre">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-fecha-tentativa">
            Fecha Tentativa
          </label>
          <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-fecha-tentativa" type="date" placeholder="Fecha Tentativa">
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded" type="button" onclick="guardarRegistro()">
            Guardar
          </button>
         
        </div>
      </div>
    </form>
  </div>
  <br><br>
  <hr><hr><hr>
  <div class="flex justify-center">
  <table class="table-fixed text-2xl">
    <thead>
      <tr>
        <th class="w-1/4 px-6 py-2">Dependencia</th>
        <th class="w-1/4 px-10 py-2">Nombre trabajador</th>
        <th class="w-1/4 px-6 py-2">Prioridad</th>
        <th class="w-1/4 px-6 py-2">Fecha Tentativa</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <td class="border px-4 py-2">Cartera</td>
        <td class="border px-4 py-2">ESTEFANY CORREA</td>
        <td class="border px-4 py-2">baja</td>
        <td class="border px-4 py-2"></td>
      </tr>
      <tr>
        <td class="border px-4 py-2">Cartera</td>
        <td class="border px-4 py-2">ALEJANDRO LONDOÑO</td>
        <td class="border px-4 py-2">baja</td>
        <td class="border px-4 py-2"></td>
      </tr>
      <tr>
        <td class="border px-4 py-2">Cartera</td>
        <td class="border px-4 py-2">KAREN MOLINA</td>
        <td class="border px-4 py-2">baja</td>
        <td class="border px-4 py-2">25/10/2023</td>
      </tr>
      <tr>
        <td class="border px-4 py-2">Cartera</td>
        <td class="border px-4 py-2">ELLEN MENA</td>
        <td class="border px-4 py-2">baja</td>
        <td class="border px-4 py-2"></td>
      </tr>  
    </tbody>
  </table>
</div>

<br><br><br>
<hr><hr><hr>
<div class="flex justify-center">
    <table class="table-fixed text-2xl">
      <thead>
        <tr>
          <th class="w-1/4 px-6 py-2">Dependencia</th>
          <th class="w-1/4 px-10 py-2">Nombre trabajador</th>
          <th class="w-1/4 px-6 py-2">Prioridad</th>
          <th class="w-1/4 px-6 py-2">Fecha Tentativa</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td class="border px-4 py-2">Ventas</td>
          <td class="border px-4 py-2">JHEISON ARROYAVE</td>
          <td class="border px-4 py-2">baja</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Ventas</td>
          <td class="border px-4 py-2">SIMON GUTIERREZ</td>
          <td class="border px-4 py-2">baja</td>
          <td class="border px-4 py-2"></td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Ventas</td>
          <td class="border px-4 py-2">SARA PIEDRAHITA</td>
          <td class="border px-4 py-2">baja</td>
          <td class="border px-4 py-2">23/20/2023</td>
        </tr>
        <tr>
          <td class="border px-4 py-2">Ventas</td>
          <td class="border px-4 py-2">FELIPE AGUDELO</td>
          <td class="border px-4 py-2">baja</td>
          <td class="border px-4 py-2">26/10/2023</td>
        </tr> 
        <tr>
            <td class="border px-4 py-2">Ventas</td>
            <td class="border px-4 py-2">SARA PRACTICANTE</td>
            <td class="border px-4 py-2">baja</td>
            <td class="border px-4 py-2"></td>
          </tr>
          <tr>
            <td class="border px-4 py-2">Ventas</td>
            <td class="border px-4 py-2">JOHANNA PRACTICANTE</td>
            <td class="border px-4 py-2">Media</td>
            <td class="border px-4 py-2"></td>
          </tr>
          <tr>
            <td class="border px-4 py-2">Ventas</td>
            <td class="border px-4 py-2">KEIMER PRACTICANTE</td>
            <td class="border px-4 py-2">baja</td>
            <td class="border px-4 py-2">25/10/2023</td>
          </tr>
          <tr>
            <td class="border px-4 py-2">Ventas</td>
            <td class="border px-4 py-2"> JENNY SEPULVEDA</td>
            <td class="border px-4 py-2">baja</td>
            <td class="border px-4 py-2"></td>
          </tr>
          <tr>
            <td class="border px-4 py-2">Ventas</td>
            <td class="border px-4 py-2">SIRLEY GARZON</td>
            <td class="border px-4 py-2"></td>
            <td class="border px-4 py-2"></td>
          </tr>
          <tr>
            <td class="border px-4 py-2">Ventas</td>
            <td class="border px-4 py-2">GONZALO ZAPATA</td>
            <td class="border px-4 py-2">baja</td>
            <td class="border px-4 py-2"></td>
          </tr>
          <tr>
            <td class="border px-4 py-2">Ventas</td>
            <td class="border px-4 py-2">BERNARDO VELASQUEZ</td>
            <td class="border px-4 py-2">baja</td>
            <td class="border px-4 py-2">25/10/2023</td>
          </tr>
        </tbody>
    </table>
  </div>
  
  <script src="cronograma.js"></script>
</body>
</html>