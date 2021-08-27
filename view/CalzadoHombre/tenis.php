<?php
include_once '../model/masterModel.php';
$obj = new MasterModel();

$sql = "SELECT * FROM producto";
$producto = $obj->consult($sql);
?>
<?php
$contador = 1;
foreach ($producto as $prod) {
   if ($contador == 1) {
   echo "<div class='row'>";
   }
      echo "<div class='ml-5  mt-4 col-md-3'>";
         echo "<div class='card-deck row mt-4'>";
   //echo "<div class='card col-md-3'>";
            echo "<img class='card-img-top mt-3' src='" . $prod['imagProd'] . "' alt='Card image cap'>";
            echo "<ul class='social'>";
            echo "<li><a href='#' type='submit' value='agregar' data-tip='Agregar al carrito'><i class='fa fa-shopping-cart'></i></a></li>";  
            echo "</ul>";
            echo "<div class='card-body'>";
              echo "<h5 class='card-title'>".$prod['nomProd']."</h5>";
              echo "<p class='card-text'>".$prod['precProd']."</p>";
              echo "<a href='#' class='btn btn-warning'>Ver detalle</a>";
            echo "</div>";
         echo "</div>";
      echo "</div>";
   $contador++;
   if ($contador == 4) {
   echo "</div>";
      $contador = 1;
   }
}
?>
