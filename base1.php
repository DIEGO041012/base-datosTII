<?php

    include('base1conexion.php');

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="./form.css">
    <title>Formulario - Hoja de vida del computador</title>
</head>

<body>
    <div class="container mt-4">
      
        
        <section class="container mt-4 text-center">
        <img src="./img/logo_dan-removebg-preview.png" alt=""class="img-fluid" style="max-width: 200px;">
        <h1>Hoja de vida del computador</h1>
        <br><br>
    </section>
    <div class="container mt-4">
        <form class="row g-3 needs-validation" action="procesar_formulario.php" method="post" >
            <div class="col-md-6">
                <h2>Información del Equipo</h2>
                <div class="col-md-12">
                    <label for="personaEncargada" class="form-label">Persona encargada</label>
                    <input type="text" class="form-control" id="personaEncargada" name="PersonaEncargada" required>
                    <div class="valid-feedback"></div>
                </div>
                <!-- Resto de campos relacionados con el equipo -->
            </div>

            <div class="col-md-6">
                <h2>Especificaciones</h2>
                <div class="col-md-12">
                    <label for="procesador" class="form-label">Procesador</label>
                    <input type="text" class="form-control" id="procesador" name="Procesador"required>
                    <div class="invalid-feedback"></div>
                </div>
                <!-- Resto de campos relacionados con la configuración del equipo -->
            </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Marca</label>
                <select class="form-select" id="validationCustom01" name="Marca"required>
                  <option selected disabled value="">Marca</option>
                  <option>DELL</option>
                  <option>ASUS</option>
                  <option>HP</option>
                  <option>LENOVO</option>
                  <option>THINKPAD</option>
                  <option>OTRO</option>
                </select>
                <div class="invalid-feedback">
                
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Modelo</label>
                <input type="text" class="form-control" id="validationCustom02" name="modelo" required>
                <div class="invalid-feedback">
                  
                </div>
              </div>
            <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Disco Duro</label>
                <select class="form-select" id="validationCustom03" name="DiscoDuero" required>
                  <option selected disabled value="">capacidad</option>
                  <option>128GBSSD</option>
                  <option>250GBSSD</option>
                  <option>400GBSSD</option>
                  <option>500GBSSD</option>
                  <option>1TSSD</option>
                  <option>128GBHDD</option>
                  <option>250GBHDD</option>
                  <option>400GBHDD</option>
                  <option>500GBHDD</option>
                  <option>1TSHDD</option>
                </select>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom04" class="form-label">Memoria RAM</label>
                <select class="form-select" id="validationCustom04" name="MemoriaRAM" required>
                  <option selected disabled value="">Capacidad</option>
                  <option>2GB</option>
                  <option>4GB</option>
                  <option>8GB</option>
                  <option>16GB</option>
                </select>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Serie</label>
                <input type="text" class="form-control" id="validationCustom05" name="Serie"required>
                <div class="invalid-feedback"> 
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom04" class="form-label">Sistema Operativo</label>
                <select class="form-select" id="validationCustom06" name="SistemaOperativo" required>
                  <option selected disabled value="">windows</option>
                  <option>windows 11</option>
                  <option>windows 10</option>
                  <option>windows 8</option>
                  <option>windows 7</option>
                </select>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Activo fijo</label>
                <input type="text" class="form-control" id="validationCustom07" name="ActivoFijo" required>
                <div class="invalid-feedback">
                </div>
              </div>
              <div class="col-md-3">
                <label for="validationCustom05" class="form-label">Conexion</label>
                <input type="text" class="form-control" id="validationCustom08" name="Conexion" required>
                <div class="invalid-feedback">
                  
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Velocidad</label>
                <input type="text" class="form-control" id="validationCustom09" name="Velocidad" required>
                <div class="invalid-feedback"> 
                
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom05" class="form-label">Nombre pc</label>
                <input type="text" class="form-control" id="validationCustom010" name="NombrePc"required>
                <div class="invalid-feedback"> 
                
                </div>
              </div>
              <div class="col-md-6">
                <label for="validationCustom05" class="form-label">MAC</label>
                <input type="text" class="form-control" id="validationCustom011" name="MAC" required>
                <div class="invalid-feedback"> 
                
                </div>
              </div>
              <h2>Otros Detalles</h2>
                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Area</label>
                    <select class="form-select" id="validationCustom012" name="Area" required>
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
                      <option>Giovanni</option>
                      <option>Charcuteria</option>
                      <option>Porteria</option>
                      <option>Resepcion</option>
                      <option>Tesoreria</option>
                      <option>Supervisores empaquez</option>
                      <option>Cava AG medellin</option>
                      <option>Carniceria</option>
                      <option>Combos</option>
                      <option>Todo en uno (empaques)</option>
                      <option>Hornos</option>
                      <option>Primavera</option>
                      <option>Frio DAN</option>
                    </select>                  
                    <div class="invalid-feedback">                   
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Archivos Temporales</label>
                    <select class="form-select" id="validationCustom013" name="ArchivosTemporales" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Revision Antivirus</label>
                    <select class="form-select" id="validationCustom014" name="RevisionAntivirus" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Revision informacion</label>
                    <select class="form-select" id="validationCustom015" name="RevisionInformacion" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Limpieza papelera reciclaje</label>
                    <select class="form-select" id="validationCustom016" name="LimpiezaPapeleraReciclaje" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Revisión Actualizaciones windows Update</label>
                    <select class="form-select" id="validationCustom017" name="RevisiónActualizacioneswindowsUpdate" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Revisar Copia de Seguridad One Drive</label>
                    <select class="form-select" id="validationCustom018" name="RevisarCopiaSeguridadOneDrive" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div>
                  <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Desmontaje de Equipo</label>
                    <select class="form-select" id="validationCustom019" name="DesmontajeEquipo" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div><div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Limpieza Interna</label>
                    <select class="form-select" id="validationCustom020" name="LimpiezaInterna" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div><div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Perifericos</label>
                    <select class="form-select" id="validationCustom021" name="Perifericos" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                  </div><div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Limpieza externa</label>
                    <select class="form-select" id="validationCustom022" name="LimpiezaExterna" required>
                      <option selected disabled value=""></option>
                      <option>SI</option>
                      <option>NO</option>
                    </select>
                    <div class="invalid-feedback">
                    </div>
                    <div class="col-md-6">
                        <label for="fechaAdquisicion" class="form-label">Fecha de Adquisición</label>
                         <input type="date" class="form-control" id="fechaAdquisicion" name="fechaRegistro" required>
                         <div class="invalid-feedback"></div>
                            </div>

                            </div>
                            <div class="col-12 mt-4">
                <button type="button" class="btn btn-primary">Borrar</button>
                <button type="button" class="btn btn-secondary">Guardar</button>
                <button type="button" class="btn btn-outline-primary">Actualizar</button>
                <button type="button" class="btn btn-outline-secondary">Imprimir</button>
            </div>
        </form>
        </div>
    </div>
      <br><br>
      

      
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    
</body>
</html>