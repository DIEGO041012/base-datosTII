<?php

include('base1conexion.php');

$conexion = conectarBD();

?>

</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./principal.css">
    <title>Document</title>
</head>
<body>
<nav class="navbar navbar-expand-lg bg-danger">
  <div class="container-fluid">
    <a class="navbar-brand text-white" href="./ingreso.php">Comestibles Dan</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active text-white" aria-current="page" href="./formulario.php">Informacion pc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./cronogramas.php">Cronograma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./base_datos.php">Base datos TI</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="/prestamos.php">Prestamos</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./inventario.php">Inventario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./informes.php">Informes</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./usuarioequipo.php">Usuario equipo</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<section class="logopp">
        <img src="./img/logo_dan-removebg-preview.png" alt="logopp">
    </section>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script  src="./js/principal.js"></script>
</body>
</html>