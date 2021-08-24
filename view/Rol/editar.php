<div class="jumbotron mt-4">
   <h3 class="display-4">Editar Rol</h3>
</div>
<form action="<?php echo getUrlAdmin("Rol","Rol","postEditar"); ?>" method="POST">
    <div class="row">
       <div class="form-group col-md-4">
          <label>Nombre Rol</label>
          <input type="text"name="nombre"class="form-control" value="<?php echo $r['descRol'] ?>">
          <input type="hidden"name="id" value="<?php echo $r['idRol'] ?>">

       </div>
    </div>
    <div class="row">
       <div class="col-md-4">
          <input type="submit" value="Enviar" class="btn btn-success mt-4">
       </div>
    </div>
</form>