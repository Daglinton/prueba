<?php
include_once('conexion.php');
session_start();

if(!isset($_SESSION['pass'])){
     session_destroy();
    header("location:index.php");
   
}
//var_dump($_GET);
echo"-------------------------- \n";
//var_dump($_SESSION);
echo "<a href='salir.php'> salir </a> <br>";

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/styles.css">
</head>
<body>
    <table class="tabla">
            <thead class="tabla-resultado">
        <tr>
        <th>Producto</th>
        <th>Descripcion</th>
        <th>Editar</th>
        <th>Eliminar</th>
         </tr>
            </thead>
             <tbody>
                 <?php 
                 $consulta="SELECT * FROM productos";
                 $result=mysqli_query($con,$consulta);
                 while($row=mysqli_fetch_array($result)){?>
                        <tr>
                        <td><?php echo $row['nombre']?></td>
                        <td><?php echo $row['descripcion']?></td>  
                        <td class="button-action"><a href="editar.php?id=<?php echo $row['id']?>">editar</a></td>
                        <td class="button-action"><a href="eliminar.php?id=<?php echo $row['id']?>">eliminar</a></td>
                        </tr>

                <?php } ?>   
        
            </tbody>

</table>

<form class="formedit" action="insertar.php" method="POST">
       
        <p><input type="text" name="nombre" placeholder="ingrese el producto"></p> 
        <p><input type="text" name="descripcion" placeholder="ingresela Descripvion"></p>
               <input type="submit" >
      
      
</form>
</body>
</html>