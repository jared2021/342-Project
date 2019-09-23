<?php
  $user = true;

  if($user) {
    header('Location:./php/Dashboard.php');
  }else {
    header('Location:./php/Login.php');
  }
?>
