<html>
  <head>
    <div class="sm:text-center text-5xl">
      <h1>Prestamos</h1>
    </div>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <link rel="stylesheet" href="./principal.css">
    <script type="text/javascript">
      google.charts.load("current", {packages:["corechart"]});
      google.charts.setOnLoadCallback(drawChart);

      function drawChart() {
        var data = google.visualization.arrayToDataTable([
          ['Task', 'Hours per Day'],
          ['bases', 8],
          ['teclados', 3],
          ['usb_wifi', 4],
          ['us_vga', 1],
          ['mause', 8]
        ]);

        var options = {
          title: 'existencias',
          pieHole: 0.4,
          sliceVisibilityThreshold: 0, // Muestra todas las etiquetas
        };

        var chart = new google.visualization.PieChart(document.getElementById('donutchart'));

        google.visualization.events.addListener(chart, 'select', selectHandler);

        function selectHandler() {
          var selectedItem = chart.getSelection()[0];
          if (selectedItem) {
            // Obtiene la etiqueta de la porción seleccionada
            var selectedLabel = data.getValue(selectedItem.row, 0);
            
            // Redirige a la página correspondiente según la etiqueta seleccionada
            switch (selectedLabel) {
              case 'informacion_pc':
                window.location.href = './informes/informes_infopc.php';
                break;
              case 'cronograma':
                window.location.href = './informes/informes_cronograma.php';
                break;
              case 'inventario':
                window.location.href = './informes/informes_inventario.php';
                break;
              case 'existencias':
                window.location.href = './informes/informes_bajas.php';
                break;
              case 'movimientos':
                window.location.href = './informes/informes_prestamos.php';
                break;
              // Agrega más casos según sea necesario
            }
          }
        }

        chart.draw(data, options);
      }
    </script>
  </head>
  <body>
    <div id="donutchart" style="width: 900px; height: 500px;"></div>
  </body>
</html>
