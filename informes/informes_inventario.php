<html>
  <head>
    <script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>
    <script type="text/javascript">
      google.charts.load('current', {'packages':['corechart', 'bar']});
      google.charts.setOnLoadCallback(drawStuff);

      function drawStuff() {

        var button = document.getElementById('change-chart');
        var chartDiv = document.getElementById('chart_div');

        var data = google.visualization.arrayToDataTable([
          ['bodega', 'Entrada', 'Salida'],
          ['bases', 15, 7],
          ['teclados', 60, 20],
          ['mause', 90, 30],
          ['disco solido', 150, 45],
          ['usb wifi', 180, 60]
        ]);

        var materialOptions = {
          width: 900,
          chart: {
            title: 'Inventario',
            subtitle: 'Especificaciones de los movimientos en bodega'
          },
          series: {
            0: { axis: 'dias' }, // Bind series 0 to an axis named 'dias'.
            1: { axis: 'meses' } // Bind series 1 to an axis named 'meses'.
          },
          axes: {
            y: {
              dias: {label: 'Días'}, // Left y-axis.
              meses: {side: 'right', label: 'Meses'} // Right y-axis.
            }
          }
        };

        var classicOptions = {
          width: 900,
          series: {
            0: {targetAxisIndex: 0},
            1: {targetAxisIndex: 1}
          },
          title: 'Inventario - Especificaciones de los movimientos en bodega',
          vAxes: {
            // Adds titles to each axis.
            0: {title: 'Días'},
            1: {title: 'Meses'}
          }
        };

        function drawMaterialChart() {
          var materialChart = new google.charts.Bar(chartDiv);
          materialChart.draw(data, google.charts.Bar.convertOptions(materialOptions));
          button.innerText = 'Cambiar a Clásico';
          button.onclick = drawClassicChart;
        }

        function drawClassicChart() {
          var classicChart = new google.visualization.ColumnChart(chartDiv);
          classicChart.draw(data, classicOptions);
          button.innerText = 'Cambiar a Material';
          button.onclick = drawMaterialChart;
        }

        drawMaterialChart();
    };
    </script>
  </head>
  <body>
    <button id="change-chart">Modo Clásico</button>
    <br><br>
    <div id="chart_div" style="width: 800px; height: 500px;"></div>
  </body>
</html>