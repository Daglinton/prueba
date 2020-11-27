<?php
$con= mysqli_connect('localhost','root','','news');
mysqli_set_charset($con,"utf8");
if(!$con){
    die("conexion error ".mysqli_connect_error());
}else{
    //echo"conexion exitosa";
}
//hola loco
?>