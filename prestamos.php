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
   <link rel="stylesheet" href="./principal.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Prestamos TI</title>
</head>
<body>
<nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="./ingreso.php">Comestibles Dan</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <div class="collapse navbar-collapse" id=".0navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
                    <a class="nav-link" href="./formulario.php"><i class="fas fa-tachometer-alt"></i>Informacion PC</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="./cronogramas.php"><i class="far fa-address-book"></i>Cronograma</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="far fa-clone"></i>Base datos TI</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./prestamos.php"><i class="far fa-chart-bar"></i>Prestamos</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./inventario.php"><i class="far fa-copy"></i>Inventario</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./informes.php"><i class="far fa-chart-bar"></i>Informe</a>
                </li>
            </ul>
        </div>
    </nav>

    <div class="">
        <img src="./img/logo_dan-removebg-preview.png" alt="logo" class="mx-auto h-54 w-64" >
    </div>
  <h1 class="sm:text-center text-5xl">
    Prestamos TI
  </h1>
  <br><br>
  <br>
  <div class="flex justify-center">
    <form id="miFormulario" class="w-full max-w-lg">
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
           Area de asignacion
          </label>
          <select class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dependencia" name="asignacion">
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
                  </select> 
          
        </div>
      </div>
      <div class="flex flex-wrap -mx-3 mb-6">
        <div class="w-full px-3">
          <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-nombre">
            Nombre/Apellido
          </label>
          <input name="nombres" class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-nombre" type="text" placeholder="Nombre">
        </div>
      </div>
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
          <option value="Usb_vga">USB/VGA</option>
          <option value="Multipuerto">Multipuerto</option>
          <option value="SSD_240gb">Disco Sólido 240GB</option>
          <option value="SSD_480gb">Disco Solodo 480GB</option>
          <option value="M.2_500GB">M2 500GB</option>
          <option value="M.2_256">M2 256GB</option>
          <option value="Cable_hdmi">Cable hdmi</option>
          <option value="Cable_hdmi_vga">Cable hdmi/vga</option>
          <option value="Cable_vga">Cable vga</option>
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
    <script src="./js/prestamos.js"></script>
</body>
</html>