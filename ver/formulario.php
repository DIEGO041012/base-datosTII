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
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css">
    <link rel="stylesheet" href="../public/img/css/principal.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <title>Informacion del computador</title>
</head>

<body>

<?php include 'heard.html'; ?> 



<div class="container mt-4">
    <div class="card">
        <div class="card-header">
            Formulario de Información del Computador
        </div>
        <div class="card-body">
            <form id='miFormulario' class="row g-3 needs-validation" novalidate>
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
                        <input type="text" class="form-control" id="procesador" name="procesador" required>
                        <div class="invalid-feedback"></div>
                    </div>
                    <!-- Resto de campos relacionados con la configuración del equipo -->
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Marca</label>
                    <select class="form-select" id="validationCustom04" name="Marca" required>
                        <option selected disabled value=""></option>
                        <option>DELL</option>
                        <option>ASUS</option>
                        <option>HP</option>
                        <option>LENOVO</option>
                        <option>OTRO</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Modelo</label>
                    <input type="text" class="form-control" id="validationCustom05" name="modelo" required>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Velocidad</label>
                    <input type="text" class="form-control" id="validationCustom05" name="Velocidad" required>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Disco Duro</label>
                    <input type="text" class="form-control" id="validationCustom05" name="disco_duro" required>
                    <div class="invalid-feedback"></div>
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
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Serie</label>
                    <input type="text" class="form-control" id="validationCustom05" name="serie" required>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom05" class="form-label">Activo fijo</label>
                    <input type="number" class="form-control" id="validationCustom05" min="0" max="9999" name="Activo_fijo" required>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Conexión</label>
                    <select class="form-select" id="validationCustom04" name="conexion" required>
                        <option selected disabled value=""></option>
                        <option>Ethernet</option>
                        <option>Wifi</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom04" class="form-label">Sistema Operativo</label>
                    <select class="form-select" id="validationCustom04" name="sistema_operativo" required>
                        <option selected disabled value=""></option>
                        <option>Windows 11</option>
                        <option>Windows 10</option>
                        <option>Windows 8</option>
                        <option>Windows 7</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">Nombre PC</label>
                    <input type="text" class="form-control" id="validationCustom05" name="Nombre_pc" required>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-6">
                    <label for="validationCustom05" class="form-label">MAC</label>
                    <input type="text" class="form-control" id="validationCustom05" name="MAC" required>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Area</label>
                    <select class="form-select" id="validationCustom04" name="area" required>
                        <option selected disabled value=""></option>
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
                        <option>Recepcion</option>
                        <option>Tesoreria</option>
                        <option>Empaque</option>
                        <option>Cava AG medellin</option>
                        <option>Carniceria</option>
                        <option>Combos</option>
                        <option>Todo en uno (empaques)</option>
                        <option>Hornos</option>
                        <option>Primavera</option>
                        <option>Frio DAN</option>
                        <option>MPNC</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-3">
                    <label for="validationCustom04" class="form-label">Archivos Temporales</label>
                    <select class="form-select" id="validationCustom04" name="archivos_temporales" required>
                        <option selected disabled value=""></option>
                        <option>SI</option>
                        <option>NO</option>
                    </select>
                    <div class="invalid-feedback"></div>
                </div>

                <div class="col-md-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Observaciones</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" name="observaciones" rows="3"></textarea>
                </div>

                <div class="w-full px-3">
                    <button id="guardar" class="btn btn-primary" type="button">
                        Guardar
                    </button>
                </div>
            </form>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="../public/img/js/formulario.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/js/bootstrap.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
</body>
</html>
