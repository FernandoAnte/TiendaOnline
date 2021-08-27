<div class="jumbotron mt-4">
   <h3 class="display-4">Editar Producto</h3>
</div>
<form action="<?php echo getUrlAdmin("Producto", "Producto", "postUpdate"); ?>" method="POST">
   <div class="row">
      <div class="form-group col-md-4">

      <!--    <input type="hidden" name="producto" class="form-control" value="<?php// echo $p['idProd'] ?>">  -->
         <div class="form-group col-md4">
            <label>Nombre Producto</label>
            <input type="text" name="nomProd" class="form-control" value="<?php echo $p['nomProd'] ?>">
         </div>
         <div class="form-group col-md-4">
            <label> Cantidad</label>
            <input type="number" name="cantProd" class="form-control" value="<?php echo $p['cantProd'] ?>">
         </div>
         <div class="form-group col-md-4">
            <label>Precio</label>
            <input type="text" name="precProd" class="form-control" value="<?php echo $p['precProd'] ?>">
         </div>


      </div>
   </div>
   <div class="row">
      <div class="col-md-4">
         <input type="submit" value="Enviar" class="btn btn-success mt-4">
      </div>
   </div>
</form>