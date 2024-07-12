<?php

    include('base1conexion.php');

    $conexion = conectarBD();



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet' href='https://cdn.jsdelivr.net/npm/bootstrap@4.6.1/dist/css/bootstrap.min.css'>
<link rel='stylesheet' href='https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.2/css/all.css'>
<link rel="stylesheet" href="../public/img/css/principal.css">
<link rel="stylesheet" href="../public/img/css/main.css">
    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <title>Informes</title>
</head>
  <head>
  <?php include 'heard.html'; ?> 

 <br>
  </div>
  <div class="row">
    <div class="col-md-6 col-lg-3">
      <div class="widget-small primary coloured-icon"><i class="icon bi bi-people fs-1"></i>
        <div class="info">
          <h4>Usuarios</h4>
          <p><b><?php 
            // Realiza la conexión a la base de datos
            $conexion = mysqli_connect("localhost", "root", "HnvPhkdaVeZ4pD", "area_ti");
            if (!$conexion) {
                die("Error de conexión: " . mysqli_connect_error());
            }

            // Realiza la consulta para obtener el número de usuarios
            $sql = "SELECT COUNT(*) AS total_nombre FROM usuario";
            $consulta = mysqli_query($conexion, $sql);
            $resultado = mysqli_fetch_assoc($consulta);
            echo $resultado['total_nombre'];

            // Cierra la conexión a la base de datos
            mysqli_close($conexion);
          ?></b></p>
        </div>
      </div>
    </div>
       <!-- estadistica empleados-->
    <div class="col-md-6 col-lg-3">
      <div class="widget-small info coloured-icon"><i class="icon bi bi-heart fs-1"></i>
        <div class="info">
          <h4>Total Bajas</h4>
          <p><b><?php 
          // Realiza la conexión a la base de datos
          $conexion = mysqli_connect("localhost", "root", "HnvPhkdaVeZ4pD", "area_ti");
          if (!$conexion) {
              die("Error de conexión: " . mysqli_connect_error());
          }
          // Realiza la consulta para obtener el número de usuarios
          $sql = "SELECT COUNT(*) AS total_marca FROM formularios_bajas";
          $consulta = mysqli_query($conexion, $sql);
          $resultado = mysqli_fetch_assoc($consulta);
          echo $resultado['total_marca'];
          // Cierra la conexión a la base de datos
          mysqli_close($conexion);
          ?></b></p>
        </div>
      </div>
    </div>
        <!-- estadistica empleados-->
    <div class="col-md-6 col-lg-3">
      <div class="widget-small warning coloured-icon"><i class="icon bi bi-person-fill fs-1"></i>
        <div class="info">
          <h4>Total Existencias</h4>
          <p><b><?php 
          // Realiza la conexión a la base de datos
          $conexion = mysqli_connect("localhost", "root", "HnvPhkdaVeZ4pD", "area_ti");
          if (!$conexion) {
              die("Error de conexión: " . mysqli_connect_error());
          }
          // Realiza la consulta para obtener el número de usuarios
          $sql = "SELECT COUNT(*) AS total_articulo FROM formularios_existencias";
          $consulta = mysqli_query($conexion, $sql);
          $resultado = mysqli_fetch_assoc($consulta);
          echo $resultado['total_articulo'];
          // Cierra la conexión a la base de datos
          mysqli_close($conexion);
          ?></b></p>
        </div>
      </div>
    </div>
    <div class="col-md-6 col-lg-3">
      <div class="widget-small danger coloured-icon"><i class="icon bi bi-star fs-1"></i>
        <div class="info">
          <h4>Tatal Prestamos</h4>
          <p><b><?php 
          // Realiza la conexión a la base de datos
          $conexion = mysqli_connect("localhost", "root", "HnvPhkdaVeZ4pD", "area_ti");
          if (!$conexion) {
              die("Error de conexión: " . mysqli_connect_error());
          }
          // Realiza la consulta para obtener el número de usuarios
          $sql = "SELECT COUNT(*) AS total_area_asignada FROM formularios_prestamos";
          $consulta = mysqli_query($conexion, $sql);
          $resultado = mysqli_fetch_assoc($consulta);
          echo $resultado['total_area_asignada'];
          // Cierra la conexión a la base de datos
          mysqli_close($conexion);
          ?></b></p>
        </div>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="col-md-6">
      <div class="tile">
        <!--<h3 class="tile-title">Estadistica de ausencias</h3>-->
        <div class="ratio ratio-16x9">
          <div id="chart1" style="width: 650px; height: 400px;"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <!--<h3 class="tile-title">Estadistica de rendimiento</h3>-->
        <div class="ratio ratio-16x9">
          <div id="chart2" style="width: 650px; height: 400px;"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <!--<h3 class="tile-title">Estadistica de Procesos</h3>-->
        <div class="ratio ratio-16x9">
          <div id="chart3" style="width: 650px; height: 400px;"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <!--<h3 class="tile-title">Estadística de Inventario</h3>-->
        <div class="ratio ratio-16x9">
          <div id="chart4" style="width: 650px; height: 400px;"></div> <!-- Corregido el identificador -->
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <!--<h3 class="tile-title">Estadística de Costos</h3>-->
        <div class="ratio ratio-16x9">
          <div id="chart5" style="width: 650px; height: 380px;"></div>
        </div>
      </div>
    </div>
    <div class="col-md-6">
      <div class="tile">
        <div class="ratio ratio-16x9">
        <!--<h3 class="tile-title">Estadística de productividad</h3>-->
          <div id="chart6" style="width: 650px; height: 400px;"></div>
        </div>
      </div>
    </div>
   <!-- <div class="col-md-12">
      <div class="tile">
        <div class="ratio ratio-16x9">
        <h3 class="tile-title">Estadística de ausencias</h3>-->
         <!-- <div id="chartEmpleados" style="width: 100%; height: 100%;"></div>
        </div>
      </div>
    </div>
  </div>-->
</main>
    <!-- Essential javascripts for application to work-->
    <!-- aca va la logica de las graficas-->
    
    <!-- Page specific javascripts-->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
<script type="text/javascript">
  fetch('get_data.php')
  .then(response => response.json())
  .then(data => {
    // Gráfica de Información de PCs
    var xAxisDataInformacionpc = data.formulario_informacionpc.map(item => item.fechaSistema);
    var seriesDataInformacionpc = data.formulario_informacionpc.map(item => item.modelo);
    var option1 = {
      toolbox: {
        top: '10%', right: '5%',
        feature: {
          magicType: { show: true, type: ['line', 'bar'] },
          restore: { show: true },
          saveAsImage: { show: true }
        }
      },
      title: { text: 'Información de PCs' },
      tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
      xAxis: { type: 'category', data: xAxisDataInformacionpc },
      yAxis: { type: 'value' },
      series: [{ name: 'Modelo', type: 'bar', data: seriesDataInformacionpc }]
    };
    var chart1 = echarts.init(document.getElementById('chart1'));
    chart1.setOption(option1);

    // Gráfica de Existencias
    var xAxisDataExistencias = data.formularios_existencias.map(item => item.fecha);
    var seriesDataExistencias = data.formularios_existencias.map(item => item.cantidad);
    var option2 = {
      toolbox: {
        top: '10%', right: '5%',
        feature: {
          magicType: { show: true, type: ['line', 'bar'] },
          restore: { show: true },
          saveAsImage: { show: true }
        }
      },
      title: { text: 'Existencias por Fecha' },
      tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
      xAxis: { type: 'category', data: xAxisDataExistencias },
      yAxis: { type: 'value' },
      series: [{ name: 'Cantidad', type: 'bar', data: seriesDataExistencias }]
    };
    var chart2 = echarts.init(document.getElementById('chart2'));
    chart2.setOption(option2);

    // Gráfica de Inventario
    var xAxisDataInventario = data.formularios_inventario.map(item => item.fecha_ingreso);
    var seriesDataInventario = data.formularios_inventario.map(item => item.cantidad);
    var option3 = {
      toolbox: {
        top: '10%', right: '5%',
        feature: {
          magicType: { show: true, type: ['line', 'bar'] },
          restore: { show: true },
          saveAsImage: { show: true }
        }
      },
      title: { text: 'Inventario por Fecha' },
      tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
      xAxis: { type: 'category', data: xAxisDataInventario },
      yAxis: { type: 'value' },
      series: [{ name: 'Cantidad', type: 'bar', data: seriesDataInventario }]
    };
    var chart3 = echarts.init(document.getElementById('chart3'));
    chart3.setOption(option3);

    // Gráfica de Préstamos
    var xAxisDataPrestamos = data.formularios_prestamos.map(item => item.fechaSistema);
    var seriesDataPrestamos = data.formularios_prestamos.map(item => item.articulo);
    var option4 = {
      toolbox: {
        top: '10%', right: '5%',
        feature: {
          magicType: { show: true, type: ['line', 'bar'] },
          restore: { show: true },
          saveAsImage: { show: true }
        }
      },
      title: { text: 'Préstamos por Fecha' },
      tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
      xAxis: { type: 'category', data: xAxisDataPrestamos },
      yAxis: { type: 'value' },
      series: [{ name: 'Artículo', type: 'bar', data: seriesDataPrestamos }]
    };
    var chart4 = echarts.init(document.getElementById('chart4'));
    chart4.setOption(option4);

    // Gráfica de Usuarios
    var xAxisDataUsuarios = data.formularios_usuarios.map(item => item.fecha);
    var seriesDataUsuarios = data.formularios_usuarios.map(item => item.nombre_responsable);
    var option5 = {
      toolbox: {
        top: '10%', right: '5%',
        feature: {
          magicType: { show: true, type: ['line', 'bar'] },
          restore: { show: true },
          saveAsImage: { show: true }
        }
      },
      title: { text: 'Usuarios por Fecha' },
      tooltip: { trigger: 'axis', axisPointer: { type: 'shadow' } },
      xAxis: { type: 'category', data: xAxisDataUsuarios },
      yAxis: { type: 'value' },
      series: [{ name: 'Nombre Responsable', type: 'bar', data: seriesDataUsuarios }]
    };
    var chart5 = echarts.init(document.getElementById('chart5'));
    chart5.setOption(option5);
  })
  .catch(error => console.error('Error al obtener los datos:', error));
</script>


    </script>
    <!-- Google analytics script-->
    <script type="text/javascript">
      if(document.location.hostname == 'pratikborsadiya.in') {
      	(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      	(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      	m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      	})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
      	ga('create', 'UA-72504830-1', 'auto');
      	ga('send', 'pageview');
      }
    </script>
    <!-- Librería ECharts -->
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/echarts@5.4.3/dist/echarts.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js" integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/echarts/5.5.0/echarts.min.js"></script>

    <script src="../public/img/js/jquery-3.7.0.min.js"></script>
    <script src="../public/img/js/bootstrap.min.js"></script>
    <script src="../public/img/js/main.js"></script>
    <script src="../public/img/js/buscador.js"></script>
    <script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<script src="https://code.highcharts.com/modules/accessibility.js"></script>

  </body>
</html>