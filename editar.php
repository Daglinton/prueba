<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
    <?php
    include_once('conexion.php');
    $id=$_GET['id'];
    $consulta="SELECT * FROM productos WHERE id='".$id."'";
    $result=mysqli_query($con,$consulta);
    ?>
</head>
<body>
    <form class="formedit" action="editar-ejecutar.php" method="POST">
        <?php while($row=mysqli_fetch_array($result)) {?>
        <p><input type="text" name="nombre" value="<?php echo $row['nombre']?>"></p> 
        <p><input type="text" name="descripcion" value="<?php echo $row['descripcion']?>"></p>
        <p><input type="text" name="id" value="<?php echo $row['id']?>"></p>
       <input type="submit" >
      <?php } ?>
      
    </form>
</body>
</html>