<div class="mt-4 jumbotron">
      <h3 class="display-4">Registrar Categoría</h3>
</div>
<form action="<?php echo getUrlAdmin("Categoria","Categoria","postInsert"); ?>" method="post">   <!--(Categoria) modulo,conttrolador y funcion -->
   <div class="row">
       <div class="form-group col-md-4">
           <label>Nombre categoria</label>
           <input type="text" name="nomCateg" class="form-control" placeholder="nombre categoria">
           
       </div>
   </div>

</form>
