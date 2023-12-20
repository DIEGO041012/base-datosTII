<?php
  require './conexiondatabase.php';

  $conexion = conectarBD();
  // var_dump($_POST);
  $errores = [];
  if($_SERVER["REQUEST_METHOD"] === "POST"){
    $user = mysqli_real_escape_string($conexion,$_POST['email']);
    $password = mysqli_real_escape_string($conexion,$_POST['contrasena']);

    if(!$user){
      $errores[]= "El correo es obligatorio";
    }
    if(!$password){
      $errores[]= "la contraseña es obligatoria";
    }

    if(empty($errores)){
      $sql = "SELECT * FROM ingreso WHERE email ='{$user}'";

      $resultado = $conexion->query($sql);
      // var_dump($resultado);
    


      if($resultado->num_rows){

        $row = $resultado->fetch_assoc();
        // echo '<pre>';
        // var_dump($row['contraseña']);
        // echo '</pre>';

        if($password === $row['contraseña']){
            header('Location: ./ingreso.php');
        }else{
          $errores[] = "contraseña incorrecta";
        }
      }
      else{
        $errores[] = "El correo no esta en la base de datos";
      }
    }else{
      
    }
  }

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
  <link rel="stylesheet" href="./alerta.css">
  <title>inicio</title>
</head>
<body>
<div class="">
        <img src="./img/logo_dan-removebg-preview.png" alt="logo" class="mx-auto h-54 w-64" >
    </div>
  <h1 class="sm:text-center text-5xl">
    Area TI
  </h1>

  <div class="flex flex-col items-center justify-center">
    <?php foreach($errores as $error): ?>
        <div class="bg-red-500 text-white border border-red-700 rounded p-4 mb-4">
            <?php echo $error; ?>
        </div>
       
    <?php endforeach; ?>

    <form method="POST" id="miFormulario" class="w-full max-w-lg">
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-dependencia">
                    Correo
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-dependencia" type="text" name="email" placeholder="Correo">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <label class="block uppercase tracking-wide text-gray-700 text-xs font-bold mb-2" for="grid-contraseña">
                    Contraseña
                </label>
                <input class="appearance-none block w-full bg-gray-200 text-gray-700 border border-gray-200 rounded py-3 px-4 mb-3 leading-tight focus:outline-none focus:bg-white focus:border-gray-500" id="grid-contraseña" type="password" name="contrasena" placeholder="Contraseña">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <input type="hidden" name="formSubmitted" value="1">
            </div>
        </div>
        <div class="flex flex-wrap -mx-3 mb-6">
            <div class="w-full px-3">
                <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">
                    Entrar
                </button>
            </div>
        </div>
    </form>
</div>
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.tailwindcss.com"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  
  <script src="./js/ingreso.js"></script>
</body>
</html>