<div class="jumbotron mt-4">
   <h3 class="display-4">Registrar Usuario</h3>
</div>
<form action="<?php echo getUrlAdmin("Usuario", "Usuario", "postInsert"); ?>" method="POST" enctype="multipart/form-data">
   <div class="row">
      <div class="form-group col-md-4">
         <label>Rol usuario</label>
         <input type="text" name="nomUsuario" class="form-control" placeholder="Rol">
      </div>
      <div class="form-group col-md-4">
         <label>Nombre</label>
         <input type="text" name="nombre" class="form-control" placeholder="Nombre">
      </div>
      <div class="form-group col-md-4">
         <label>Apellido</label>
         <input type="text" name="apellUsuario" class="form-control" placeholder="Apellido">
      </div>
   </div>

   <div class="row">
      <div class="form-group col-md-4">
         <label>Teléfono</label>
         <input type="text" name="telUsuario" class="form-control" placeholder="Telefono">
      </div>
      <div class="form-group col-md-4">
         <label>Dirección</label>
         <input type="text" name="dirUsuario" class="form-control" placeholder="Dirección">
      </div>
      <div class="form-group col-md-4">
         <label>Ciudad</label>
         <input type="text" name="idCiudad" class="form-control" placeholder="Ciudad">
      </div>
   </div>
   <div class="row">
      <div class="col-md-4">
         <input type="submit" value="Enviar" class="btn btn-success mt-4">
      </div>
   </div>
</form>