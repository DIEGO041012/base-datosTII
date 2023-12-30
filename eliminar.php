<?php

require './conexiondatabase.php';


$conexion = conectarBD();


if(isset($_POST["elementoID"])){
    $elemento =$_POST["elementoID"];
    
    $sql = "DELETE FROM inventario WHERE tipo = '{$elemento}'";
    $conexion->query($sql);
}

?>


<?php $conexion->close()?>