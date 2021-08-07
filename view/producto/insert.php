<div class="mt-4 jumbotron">
     <h3 class="display-4">Registrar producto</h3>
</div>

<form action="<?php echo getUrl("Producto","Producto","postInsert");?>"method="post">
    <div class="row">
        <div class="form-group col-md-4">
           <label>Nombre Producto</label>
           <input type="text" name="nomProd" class="form-control" placeholder="nombre producto">
        </div>
        <div class="form-group col-md-4">
           <label>Cantidad Producto</label>
           <input type="number" name="cantProd" class="form-control" placeholder="cantidad producto">
        </div>
        <div class="form-group col-md-4">
           <label>Precio Producto</label>
           <input type="number" name="precProd" class="form-control" placeholder="precio producto">
        </div>
    </div>

    <div class="row">
       <!--  <div class="form-group-col-md-4">
           <label>Imagen Producto</label>
           <input type="file" name="imagProd">
        </div> -->
        <div class="form-group col-md-4">
            <label class="mx-3">Categoria</label>
            <div class="col-md-10">
                <select name="idCateg[]" class="form-control" id="idCateg">
                  <option value="">Seleccione..</option>
                  <?php
                    foreach ($categoria as $cat){
                       echo "<option value=´".$cat['idCateg']."'>".$cat['idCateg']."</option>";
                    }
                  ?>
                </select>
            </div>       
        </div>
    </div> 
    <div class="col-md-2">
        <button type="button" class="btn btn-primary" id="agregar">+</button>
    </div>

    <div id="contenido" class="mx-3 row col-md-4">
          <textarea name="categoria" id="categoria" readonly class="form-control" rows="2"></textarea>
    </div>
    <div class="row">
        <div class="col-md-3">
             <input type="submit" value="enviar" class="btn btn-success">
        </div>
    </div>
</form>


