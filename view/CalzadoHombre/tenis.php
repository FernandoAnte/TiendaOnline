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
   echo "<div class='container'>";
   echo "<div class='card-deck row mt-4'>";
   }
   echo "<div class='card col-md-4'>";
      echo "<div class='ml-5  mt-4'>";
         echo "<div class='card-deck row mt-4'>";
            echo "<img class='card-img-top mt-3' src='" . $prod['imagProd'] . "' alt='Card image cap'>";
            echo "<ul class='social'>";
              //echo "<li><a href='#' type='submit' value='agregar' data-tip='Agregar al carrito'><i class='fa fa-shopping-cart'></i></a></li>";  
            echo "</ul>";
            echo "<div class='card-body'>";
              echo "<h5 class='card-title'>".$prod['nomProd']."</h5>";
              echo "<p class='card-text'>".$prod['precProd']."</p>";
              echo "<div  onclick='addCart(".$prod['idProd'].")' class='btn btn-primary'>añadir al carrito</div>";
               // echo "<a href='".getUrl("Carrito","Carrito","addCart",array("id" => $prod['idProd']))."'   class='btn btn-primary'>añadir al carrito</a>";

            echo "</div>";
         echo "</div>";
      echo "</div>";
      echo "</div>";
   $contador++;
   if ($contador == 5) {
   echo "</div>";
   echo "</div>";
      $contador = 1;
   }
}
?>
