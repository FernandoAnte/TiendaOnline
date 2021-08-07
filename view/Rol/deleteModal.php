
  <form action="<?php echo getUrlAdmin("Rol","Rol","postDelete");?>" method="post">

      <div class="modal-body">
        <div class="row">
              <div class="col-md-6-form-group">
                <label>Rol</label>
                <input type="text" readonly name="nombre" class="form-control" value="<?php echo $r['descRol'] ?>">
                <input type="hidden" name="id" value="<?php echo $r['idRol']?>">
              </div> 
          </div>         
      </div>

      <div class="modal-footer">
        <button type="button" class="btn btn-primary" data-disniss="modal">Cerrar</button>
        <button type="submit" class="btn btn-danger">Eliminar</button>
      </div>
  </form>
