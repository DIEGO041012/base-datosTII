<?php

include('base1conexion.php');

$conexion = conectarBD();

  if($conexion){
    $sql = "SELECT tipo, sum(cantidad) as suma FROM base_de_datos_ti.inventario group by tipo;";
    $resultado = $conexion->query($sql);
    


  }
  

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./basedatos.css">

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
          <a class="nav-link active text-white" aria-current="page" href="./formulario.php">informacion pc</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./cronogramadatos.php">cronograma</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./prestamosbase.php">prestamos</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle text-white" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            informes
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item text-black" href="./informes/inventario">inventario</a></li>
            <li><a class="dropdown-item text-black" href="./informes/informes_prestamos.php">prestamos</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item text-black" href="">informe general</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="./inventario.php">inventario</a>
        </li>
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>


<div class="prestamos">
    <div class="titulo4">inventario</div>
    <div class="cabecera4">
      <span>tipo</span>
      <span>Suma</span>
      <span></span>      
    </div>
    <?php while($inventario = $resultado->fetch_assoc()):?>
      <div id="<?php echo $inventario['tipo']?>" class="existencias" >
        <div class="tipo"><?php echo $inventario['tipo']?></div>
        <div class="cantidad"><?php echo $inventario['suma']?></div> 
        <div class="opciones">
          <lord-icon
              class="icon"
              src="https://cdn.lordicon.com/skkahier.json"
              trigger="hover"
              style="width:25px;height:25px">
          </lord-icon>
        </div>       
      </div>
    <?php endwhile ;?>
  </div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
<script src='https://code.jquery.com/jquery-3.4.1.min.js'></script>
<script src="https://cdn.lordicon.com/lordicon.js"></script>
<script  src="./js/basedatos.js"></script>
</body>
</html>