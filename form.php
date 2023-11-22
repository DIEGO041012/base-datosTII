<?php

    include('conexionform.php');

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <?php

            $nitocc="";
            $nombre="";
            $direccion="";
            $telefono="";
            $fechaIngreso="";
            $CupoCredito="";
            $foto="";
            if(isset($_POST['buscar']))
            {
                $consulta=$conexion->query("select * from tblcliente where nitocc='$nitocc'");
                while($resultadoconsulta=$consulta->fetch_array())
                {
                    $nitocc=$resultadoconsulta[0];
                    $nombre=$resultadoconsulta[1];
                    $diereccion=$resultadoconsulta[2];
                    $telefono=$resultadoconsulta[3];
                    $fechaIngreso=$resultadoconsulta[4];
                    $CupoCredito=$resultadoconsulta[5];
                    $fecha=$resultadoconsulta[6];
                    
                }
            }
    
    
    ?>

</head>
<body>

   
        <h2>Manipulacion de datos con php</h2>
        <form action="" method="post"enctype="multipart/form-data">
            <label for="">buscar</label>
            <input type="text" name="nitoccbus" id="" placeholder="buscar cliente">
            <input type="submit" value="buscar">
            <hr>
            <label for="">Nit o CC:</label>
            <input type="text" name="nitocc" id="" placeholder="Ingrese el nit o CC del nuevo cliente" value="<?php echo $nitocc?>">
            <br><br>
            <label for="">Nombres:</label>
            <input type="text" name="nombres" id="" placeholder="ingrese el nombre"value="<?php echo $nombre?>">
            <br><br>
            <label>Telefono:</label>
            <input type="number" name="telefono" id="" placeholder="EJ 300-545-56-54"value="<?php echo $telefono?>">
            <br><br>
            <label for="">Dierecccion:</label>
            <input type="text" name="direccion" id="" placeholder="EJ CLL 43#12-20"value="<?php echo $direccion?>">
            <br><br>
            <label for="">Fecha de ingreso:</label>
            <input type="date" name="fechaIngreso" id="" value="<?php echo $fechaIngreso?>">
            <br><br>
            <label for="">Cupo del credito</label>
            <input type="number" name="CupoCredito" id="" placeholder="$ valor en pesos"value="<?php echo $CupoCredito?>">
            <br><br>
            <label for="">Subir foto</label>
            <input type="file" name="foto"id="">
            <br><br>
            <label for="">foto</label>
            <img src="<?php echo $foto?>" width="50" height="80" alt="">
            <br><br>
            <input type="submit" value="Nuevo cliente" name="guardar">
            <input type="submit" value="Lista de los clientes" name="Listar">
            <input type="submit" value="Actualizar clientes" name="Actualizar">
            <input type="submit" value="Eliminar clientes" name="Eliminar">

        </form>

    
   
    <?php
       if(isset($_POST['guardar'])){

        //los datos de entrada almacenados en las variables

        $nitocc=$_POST['nitocc'];
        $nombre=$_POST['nombres'];
        $telefono=$_POST['telefono'];
        $direccion=$_POST['direccion'];
        $fecha=$_POST['fechaIngreso'];
        $CupoCredito=$_POST['CupoCredito'];
        //manejo de archivos
        $nombre_foto=$_Files['foto']['name'];//nombre de la foto
        $ruta=$_Files['foto']['tmp_name'];//ruta de path del archivo
        $foto='foto/'.$nombre_foto;//ruta y el nombre del archivo
        copy($ruta,$foto);//guarda el archivo en una ruta especifica
       }

        //verificar que no existan valores duplicados para que el campo de Nit o CC

        $sqlbuscar="SELECT nitocc FROM tblcliente WHERE nitocc='$nitocc' ORDER BY nitocc";
        if($resultado=mysqli_query($conexion,$sqlbuscar))
        {
            $nororegistro=mysqli_num_rows ($resultado);
            if($nororegistro>0)
            {
                echo"<script>alert('ese NIT o CC ya existe');</script>";
            }
            else
            {
                mysqli_query ($conexion,"INSERT INTO nuevocrud(nitocc,nombre,telefono,direccion,fecha,cupocredito,foto)VALUES ('$nitocc','$nombre','$telefono','$direccion','$fecha','$CupoCredito','$foto')");
                echo"Datos guardados correctamente";   
            }
        }
    
       
    ?>
    
</body>
</html>