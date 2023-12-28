<?php

include('base1conexion.php');

$conexion = conectarBD();

  if($conexion){
    $sql = "SELECT * FROM informacion_pc";
    
    

    $resultado = $conexion->query($sql);
    
    
  }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./informacionpc_base.css">
    <title>prestamosbase</title>
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
          <a class="nav-link text-white" href="./cronogramadatos.php">Cronograma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./prestamosbase.php">Prestamos</a>
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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

<div class="titulo1">Informacion PC</div>
<div class="container_tabla">
<div class="cabecera">
  <span>Encargado</span>
  <span>Marca</span>
  <span>Modelo</span>
  <span>Disco_duro</span>
  <span>RAM</span>
  <span>Procesador</span>
  <span>Nombre_pc</span>
  <span>Conexion</span>
  <span>Activo_fijo</span>
  <span>Mac</span>
  <!--<span>sistema_operativo</span>
  <span>serie</span>
  <span>velocidad</span>
  <span>perifericos</span>
  <span>limpieza_externa</span>
  <span>limpieza_interna</span>
  <span>desmontaje _de_equipo</span>-->
  
</div>
<?php while($informacion_pc = $resultado->fetch_assoc()):?>
  <div class="informacion_pc" id="<?php echo $informacion_pc['id_informacion_pc']?>">
    <div class="persona_encargada"><?php echo $informacion_pc['persona_encargada']?></div>
    <div class="marca"><?php echo $informacion_pc['marca']?></div>
    <div class="modelo"><?php echo $informacion_pc['modelo']?></div>
    <div class="disco_duro"><?php echo $informacion_pc['disco_duro']?></div>
    <div class="memoria_RAM"><?php echo $informacion_pc['memoria_RAM']?></div>
    <div class="procesador"><?php echo $informacion_pc['procesador']?></div>
    <div class="nombre_pc"><?php echo $informacion_pc['nombre_pc']?></div>
    <div class="conexion"><?php echo $informacion_pc['conexion']?></div>
    <div class="activo_fijo"><?php echo $informacion_pc['activo_fijo']?></div>
    <div class="mac"><?php echo $informacion_pc['mac']?></div>
  </div>
<?php endwhile ;?>
</div>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script  src="./js/basedatos.js"></script>
</body>
</html>