<?php
    include_once '../lib/helpers.php';
    include_once '../view/partialadmin/head.php';
    include_once '../view/partialadmin/navbar.php';     
       echo "<div id='layoutSidenav'>" ;             
           include_once '../view/partialadmin/menu.php';
       echo  "<div id='layoutSidenav_content'>";
?>      
    <main>
        <div class="container-fluid px-4">
            <?php
               if (isset($_GET['modulo'])) {
                resolve();
               }else{
              // include_once '../view/partial/carrusel.php';
            }
            ?>
        </div>
    </main>
<?php
    include_once '../view/partialadmin/footerbarra.php';  
      echo " </div>" ;

      echo " </div>";  
    include_once '../view/partialadmin/footer.php';
?>
        
