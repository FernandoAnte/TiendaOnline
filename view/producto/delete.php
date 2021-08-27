<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar Producto</h3>
</div>
<?php
    foreach ($producto as $prod) {
?>
<form action="<?php echo getUrlAdmin("Producto","Producto","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="idProd" value="<?php echo $prod['idProd']; ?>">
            <input type="text" readonly name="nomProd" class="form-control" value="<?php echo $prod['nomProd'] ?>"> 
            <p class="mt-4">¿Esta seguro de eliminar el Producto?</p>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <input type="submit" value="Eliminar" class="btn btn-danger">
        </div>
    </div>
</form>
<?php
    }
?>