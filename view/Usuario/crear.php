<div class="jumbotron mt-4">
   <h3 class="display-4">Registrar Usuario</h3>
</div>
<form action="<?php echo getUrlAdmin("Usuario","Usuario","postInsert"); ?>" method="POST">
    <div class="row">
       <div class="form-group col-md-4">
          <label>Nombre</label>
          <input type="text"name="nombre"class="form-control"placeholder="Nombre usuario">
       </div>
    </div>
    <div class="row">
       <div class="col-md-4">
          <input type="submit" value="Enviar" class="btn btn-success mt-4">
       </div>
    </div>
</form>