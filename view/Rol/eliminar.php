<div class="jumbotron mt-4">
    <h3 class="display-4">Eliminar Rol</h3>
</div>
<?php
    foreach ($rol as $Rol) {
?>
<form action="<?php echo getUrlAdmin("Rol","Rol","postDelete"); ?>" method="post">
    <div class="row">
        <div class="form-group col-md-4">
            <label>Nombre</label>
            <input type="hidden" name="idRol" value="<?php echo $Rol['idRol']; ?>">
            <input type="text" readonly name="descRol" class="form-control" value="<?php echo $Rol
            ['descRol'] ?>"> 
            <p class="mt-4">¿Esta seguro de eliminar el Rol?</p>
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