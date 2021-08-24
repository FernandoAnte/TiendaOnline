<div class="mt-4 jumbotron">
     <h3 class="display-4">Registrar producto</h3>
</div>

<form action="<?php echo getUrlAdmin("Producto","Producto","postInsert");?>" method="post" enctype="multipart/form-data">
    <div class="row">
        <div class="form-group col-md-4">
           <label>Nombre Producto</label>
           <input type="text" name="nomProd" class="form-control" placeholder="nombre producto">
        </div>
        <div class="form-group col-md-4">
           <label>Cantidad</label>
           <input type="number" name="cantProd" class="form-control" placeholder="cantidad producto">
        </div>
        <div class="form-group col-md-4">
           <label>Precio</label>
           <input type="number" name="precProd" class="form-control" placeholder="precio producto">
        </div>
    </div>


    <div class="row">
       <div class="form-group col-md-4">
          <div class="form-group col-md-4">
             <label>proveedor</label>
               <div class="row-md-10">
               <select name="idProve" class="form-control">
                  <option value="">Seleccione..</option>
                  <?php
                    foreach ($proveedor as $prov){
                       echo "<option value='".$prov['idProve']."'>".$prov['nomProve']."</option>";
                    }
                  ?>
                </select>
               </div>
          </div>
       </div>
    </div>


    <div class="row">
        <div class="form-group col-md-4">
           <label>Marca</label>
           <div class="row-md-10">
                <select name="idMarca" class="form-control">
                  <option value="">Seleccione..</option>
                  <?php
                    foreach ($marcas as $m){
                       echo "<option value='".$m['idMarca']."'>".$m['nomMarca']."</option>";
                    }
                  ?>
                </select>
            </div>
        </div>
        <div class="form-group col-md-4">
           <label>Color</label>
           <input type="text" name="colorProd" class="form-control" placeholder="colorproducto">
        </div>
    </div>

    <div class="row">
        
        <div class="form-group col-md-4">
           <label>Imagen Producto</label>
           <input type="file" name="imagProd">
        </div> 
        <div class="form-group col-md-3">
            <label class="mx-3">Categoria</label>
            <div class="row-md-10">
                <select name="idCateg" class="form-control" id="copy">
                  <option value="">Seleccione..</option>
                  <?php
                    foreach ($categoria as $cat){
                       echo "<option value='".$cat['idCateg']."'>".$cat['nomCateg']."</option>";
                    }
                  ?>
                </select>
            </div>                
        </div>
    </div> 
    <div class="mx-3 row col-md-4 mt-4">
        <label for="">Descripcion producto</label>
          <textarea name="descProd" class="form-control" rows="2"></textarea>
    </div>
    <div class="row">
        <div class="col-md-3 mt-4">
             <input type="submit" value="enviar" class="btn btn-success">
        </div>
    </div>
</form>


