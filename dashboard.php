<?php
session_start();

if(!isset($_SESSION['pass'])){
    session_destroy();
   header("location:index.php");
  
}

echo $_SESSION['usuario'];
?>