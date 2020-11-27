<?php
    include_once('conexion.php');

    $nombre=$_POST['nombre'];
    $desc=$_POST['descripcion'];
 
    $consulta="INSERT INTO   productos (nombre, descripcion) Values ( '".$nombre."','".$desc."') ";
    mysqli_query($con,$consulta);
    header("location:datos.php");
?>