<?php

include('base1conexion.php');

$conexion = conectarBD();

  if($conexion){
    $sql = "SELECT * FROM usuario_equipo";
    
    

    $resultado = $conexion->query($sql);
    
    
  }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">   
    <link rel="stylesheet" href="./usuario.css">
    <title>usuarioequipobase</title>
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
          <a class="nav-link active text-white" aria-current="page" href="./informacionpc_base.php">Informacion pc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./cronogramadatos.php">Cronograma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./prestamos.php">Prestamos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Informes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-black" href="./informes/inventario">Inventario</a></li>
            <li><a class="dropdown-item text-black" href="./informes/informes_prestamos.php">Prestamos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-black" href="">Informe general</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./inventariobase.php">Inventario</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./usuarioequipo.php">usuario equipo</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


<div class="usuario">
    <div class="titulo">Usuario del equipo</div>
    <div class="cabecera">
      <span>Area</span>
      <span>Nombre</span>
      <span>Contraseña</span>
      <span>Articulo</span>
      <span>Fecha ingreso</span>
      <span>Fecha sistema</span>
    </div>
    <?php while($usuario_equipo = $resultado->fetch_assoc()):?>
      <div class="usuario_equipo" id="<?php echo $usuario_equipo['id']?>">
        <div class="area"><?php echo $usuario_equipo['area']?></div>
        <div class="nombre"><?php echo $usuario_equipo['nombre']?></div>
        <div class="contraseña"><?php echo $usuario_equipo['contraseña']?></div>
        <div class="articulo"><?php echo $usuario_equipo['articulo']?></div>
        <div class="fecha"><?php echo $usuario_equipo['fecha_ingreso']?></div>
        <div class="fechaSistema"><?php echo $usuario_equipo['fecha']?></div>
      </div>
    <?php endwhile ;?>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script  src="./js/basedatos.js"></script>
</body>
</html>