<?php

   include_once '../lib/helpers.php';
   include_once '../lib/helpersLogin.php';
   include_once '../view/partial/head.php';

   echo "<body>";
          // echo "<div class='container'>";
         include_once '../view/partial/navbarr.php';
         include_once '../view/partial/carrusel.php';
 
        if (isset($_GET['modulo'])) {
            resolve();
        }else{

          if ($_SESSION['Rol'] == 1 ){
            include_once 'admin.php';
          
          } else if ($_SESSION['Rol'] == 4 ){
            include_once 'menu.php';
          }
          //include_once '../view/partial/imagenes.php';
        } 
       
        
        //echo "</div>"; 
        // include_once '../view/partial/modal.php';     
         include_once '../view/partial/footer.php';
?>