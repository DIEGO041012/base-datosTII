<?php

include('base1conexion.php');

conectarBD();



?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<link rel="stylesheet" href="../public/img/css/principal.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Inventario</title>
</head>
<body>

<?php include 'heard.html'; ?> 
<br><br>
  <h1 class="sm:text-center text-5xl">
    Inventario bodega
  </h1>
  <br><br>
  
  
  <br>
  <div class="flex justify-center">
  <form id="miFormulario" class="w-full max-w-lg">
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
          Tipo
        </label>
        <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dependencia" name="tipo">
          <option value="Teclado">Teclado</option>
          <option value="Teclado_numerico">Teclado numerico</option>
          <option value="Mause">Mouse</option>
          <option value="Pantalla">Pantalla</option>
          <option value="Base">Base</option>
          <option value="Usb_wifi">USB/WiFi</option>
          <option value="Usb_ethernet">USB Ethernet</option>
          <option value="Memorias_RAM_2gb">memorias RAM 2GB</option>
          <option value="memorias_RAM_4gb">memorias RAM 4GB</option>
          <option value="memorias_RAM_8gb">memorias RAM 8GB</option>
          <option value="Multipuerto">Multipuerto</option>
          <option value="SSD_240gb">Disco Sólido 240GB</option>
          <option value="SSD_480gb">Disco Solodo 480GB</option>
          <option value="M.2_480GB">M2 480GB</option>
          <option value="M.2_240">M2 240GB</option>
          <option value="Cable_hdmi_vga">hdmi/VGA</option>
          <option value="Cable_vga">Cable VGA</option>
          <option value="Cable_hdmi">Cable HDMI</option>
          <option value="Cable_sata">Cable SATA</option>

        </select>
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-prioridad">
          Cantidad
        </label>
        <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-prioridad" type="number" name="cantidad" placeholder="Prioridad" type="number">
      </div>
    </div>
    <div class="flex flex-wrap -mx-3 mb-6">
      <div class="w-full px-3">
        <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-fecha-tentativa">
          Fecha Ingreso
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

  
  <script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
  <script src="../public/img/js/inventario.js"></script>
  

</body>
</html>