<?php

    include('base1conexion.php');

    conectarBD();

    

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
   
    <link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
    <link rel="stylesheet" href="./principal.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    
    <title>Informacion del computador</title>
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
          <a class="nav-link text-white" href="./cronogramas.php">cronograma</a>
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
      </ul>
      <form class="d-flex" role="search">
        <input class="form-control me-2" type="search" placeholder="Buscar" aria-label="Search">
        <button class="btn btn-outline-light" type="submit">Buscar</button>
      </form>
    </div>
  </div>
</nav>

  <section class="container mt-4 text-center">
  <img src="./img/logo_dan-removebg-preview.png" alt=""class="img-fluid" style="max-width: 200px;">
  <h1>Informacion del computador</h1>
  <br><br>
  </section>
  <form id='miFormulario' class="row g-3 needs-validation">
          <div class="col-md-6">
              <h2>Información del Equipo</h2>
              <div class="col-md-12">
                  <label for="personaEncargada" class="form-label">Persona encargada</label>
                  <input type="text" class="form-control" id="personaEncargada" name="personaEncargada" required>
                  <div class="valid-feedback"></div>
              </div>
              <!-- Resto de campos relacionados con el equipo -->
          </div>

          <div class="col-md-6">
              <h2>Especificaciones</h2>
              <div class="col-md-12">
                  <label for="procesador" class="form-label">Procesador</label>
                  <input type="text" class="form-control" id="procesador" name="procesador"required>
                  <div class="invalid-feedback"></div>
              </div>
              <!-- Resto de campos relacionados con la configuración del equipo -->
          </div>
          <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Marca</label>
              <select class="form-select" id="validationCustom04" name="Marca"required>
                <option selected disabled value=""></option>
                <option>DELL</option>
                <option>ASUS</option>
                <option>HP</option>
                <option>LENOVO</option>
                <option>OTRO</option>
              </select>
              <div class="invalid-feedback">
              
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Modelo</label>
              <input type="text" class="form-control" id="validationCustom05" name="modelo" required>
              <div class="invalid-feedback">
                
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Velocidad</label>
              <input type="text" class="form-control" id="validationCustom05" name="Velocidad" required>
              <div class="invalid-feedback"> 
              
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Disco Duro</label>
              <input type="text" class="form-control" id="validationCustom05" name="disco_duro" required>
              <div class="invalid-feedback"> 
              
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Memoria RAM</label>
              <select class="form-select" id="validationCustom04" name="memoria_RAM" required>
                <option selected disabled value=""></option>
                <option>2GB</option>
                <option>4GB</option>
                <option>6GB</option>
                <option>8GB</option>
                <option>16GB</option>
              </select>
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Serie</label>
              <input type="text" class="form-control" id="validationCustom05" name="serie"required>
              <div class="invalid-feedback"> 
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom05" class="form-label">Activo fijo</label>
              <input type="number" class="form-control" id="validationCustom05" min="0" max="9999" name="Activo_fijo" required>
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="col-md-3">
              <label for="validationCustom04" class="form-label">Conexión</label>
              <select class="form-select" id="validationCustom04" name="conexion" required>
                <option selected disabled value=""></option>
                <option>Ethernet</option>
                <option>Wifi</option>
              </select>
              <div class="invalid-feedback">
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom04" class="form-label">Sistema Operativo</label>
              <select class="form-select" id="validationCustom04" name="sistema_operativo" required>
                <option selected disabled value="">Windows</option>
                <option>windows 11</option>
                <option>windows 10</option>
                <option>windows 8</option>
                <option>windows 7</option>
              </select>
              <div class="invalid-feedback">
              </div>
            </div>
            
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">Nombre PC</label>
              <input type="text" class="form-control" id="validationCustom05" name="Nombre pc"required>
              <div class="invalid-feedback"> 
              
              </div>
            </div>
            <div class="col-md-6">
              <label for="validationCustom05" class="form-label">MAC</label>
              <input type="text" class="form-control" id="validationCustom05" name="MAC" required>
              <div class="invalid-feedback"> 
              
              </div>
            </div>          
              <h2>Otros Detalles</h2>
              <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Area</label>
                  <select class="form-select" id="validationCustom04" name="area" required>
                    <option selected disabled value="">Tipo</option>
                    <option>Calidad</option>
                    <option>Gestion Humana</option>
                    <option>CDN</option>
                    <option>Contabilidad</option>
                    <option>Larga vida</option>
                    <option>Ventas</option>
                    <option>Comercio exterior</option>
                    <option>Call center</option>
                    <option>Cartera</option>
                    <option>Presidencia</option>
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
                    <option>MPNC</option>
                  </select>                  
                  <div class="invalid-feedback">                   
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Archivos Temporales</label>
                  <select class="form-select" id="validationCustom04" name="archivos_temporales" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Antivirus</label>
                  <select class="form-select" id="validationCustom04" name="antivirus" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Crystal disk</label>
                  <select class="form-select" id="validationCustom04" name="cystal_disk" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom04" class="form-label">Limpieza papelera reciclaje</label>
                  <select class="form-select" id="validationCustom04" name="limpieza_papelera_reciclaje" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom04" class="form-label">Actualizaciones windows Update</label>
                  <select class="form-select" id="validationCustom04" name="actualizacion_windows_update" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-6">
                  <label for="validationCustom04" class="form-label">Copia de Seguridad One Drive</label>
                  <select class="form-select" id="validationCustom04" name="copia_de_seguridad_one_drive" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div>
                <div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Desmontaje de Equipo</label>
                  <select class="form-select" id="validationCustom04" name="desmontaje_de_equipo" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div><div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Limpieza Interna</label>
                  <select class="form-select" id="validationCustom04" name="limpieza_interna" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div><div class="col-md-3">
                  <label for="validationCustom04" class="form-label">Limpieza externa</label>
                  <select class="form-select" id="validationCustom04" name="limpieza_externa" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                </div><div class="col-md-9">
                  <label for="validationCustom04" class="form-label">Perifericos</label>
                  <select class="form-select" id="validationCustom04" name="perifericos" required>
                    <option selected disabled value=""></option>
                    <option>SI</option>
                    <option>NO</option>
                  </select>
                  <div class="invalid-feedback">
                  </div>
                  <div class="container">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="tecladoCheckbox">Teclado:</label>
                            <input type="checkbox" id="tecladoCheckbox" name="teclado">
                        </div>
                        <div class="col-md-3">
                            <label for="mouseCheckbox">Mouse:</label>
                            <input type="checkbox" id="mouseCheckbox" name="mouse">
                        </div>
                        <div class="col-md-3">
                            <label for="pantallaCheckbox">Pantalla:</label>
                            <input type="checkbox" id="pantallaCheckbox" name="pantalla">
                        </div>
                        <div class="col-md-3">
                            <label for="baseCheckbox">Base:</label>
                            <input type="checkbox" id="baseCheckbox" name="base">
                        </div>
                        <div class="col-md-3">
                          <label for="baseCheckbox">USB/WIFI:</label>
                          <input type="checkbox" id="baseCheckbox" name="usb_wifi">
                      </div>
                      <div class="col-md-3">
                        <label for="baseCheckbox">Multipuerto:</label>
                        <input type="checkbox" id="baseCheckbox" name="multipuerto">
                    </div>
                    <div class="col-md-3">
                      <label for="baseCheckbox">USB Ethernet:</label>
                      <input type="checkbox" id="baseCheckbox" name="usb_ethernet">
                  </div>
                  <div class="col-md-3">
                    <label for="baseCheckbox">HDMI/VGA:</label>
                    <input type="checkbox" id="baseCheckbox" name="hdmi_vga">
                    <input type="hidden" name="formSubmitted" value="1">
                </div>
                    </div>
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
  
      <br><br>
    
    
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="./js/formulario.js"></script>
    
    <script src='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js'></script>
    <script src='https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js'></script>
</body>
</html>
