<?php
  session_start();

  if(isset($_SESSION['uID'])){
    header('Location:./php/Dashboard.php');
  }else {
    header('Location:./php/Login.php');
  }
?>
