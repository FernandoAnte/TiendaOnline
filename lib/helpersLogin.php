<?php

  if (!isset($_SESSION['auth'])){
      redirect("login.php");

  } if ($_SESSION['Rol']!="1") {
    redirect("index.php");
  } 
?>