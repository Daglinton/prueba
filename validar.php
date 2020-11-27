<?php 
session_start();

include_once('conexion.php');
//var_dump($_POST);
$login=$_POST['log'];
$pass=$_POST['pass'];



$sql="select * from usuarios where login='".$login."' and pass='".$pass."' "; 
       $resutado=mysqli_query($con,$sql);
    $dato=[];
        if(mysqli_num_rows($resutado)>0){

     while($row= mysqli_fetch_array($resutado)){
      $dato[0]=$row['id']; 
      $dato[1]=$row['login'];
      $dato[2]=$row['pass'];
            }
//---------------------------------------------------------------------------------
            //guardamos en session los datos consultados 
         $_SESSION['usuario']=$dato[1];
         $_SESSION['pass']=$dato[2];
//--------------------------------------------------------------------------------
          //header("location:datos.php?login=$dato[0]&pass=$dato[1]") ;
          header("location:datos.php");
    }else{
      header("location:index.php?dato=login y password son incorrectos");
     
    }

?>