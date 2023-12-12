<?php
  include('base1conexion.php');
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <title>inicio</title>
</head>
<body>
  <section class="container mt-4 text-center">
    <img src="./img/logo_dan-removebg-preview.png" alt=""class="img-fluid" style="max-width: 200px;">
    <div class="d-flex justify-content-center"></div>
  <form>
    <div class="row mb-4">
      <h2>Area TI</h2>
      <br><br><br><br>
      <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre</label>
      <div class="col-sm-7">
        <input type="email" class="form-control" id="inputEmail3">
      </div>
    </div>
    <div class="row mb-3">
      <label for="inputPassword3" class="col-sm-2 col-form-label">Contrseña</label>
      <div class="col-sm-7">
        <input type="password" class="form-control" id="inputPassword3">
      </div>
    </div>
    
    <div>
     <a href="http://127.0.0.1:5500/principal.html" class="common-btn">Siguiente <img src="https://www.yudiz.com/codepen/interior-design/arrow-right.svg" class="img-fluid" alt="Arrow"></a>
    </div>
    
  </form>
</div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
</body>
</html>