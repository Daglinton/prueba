<?php
    include_once('conexion.php');

    $nombre=$_POST['nombre'];
    $desc=$_POST['descripcion'];
    $id=$_POST['id'];
    $consulta="UPDATE   productos SET nombre='".$nombre."',descripcion='".$desc."' where  id='".$id."' ";
    mysqli_query($con,$consulta);
    header("location:datos.php");
    ?>