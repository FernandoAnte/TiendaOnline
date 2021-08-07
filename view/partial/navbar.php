<nav class="navbar navbar-expand-lg navbar-light bg-light">
         <a class="navbar-brand" href="#">Tienda</a>
         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
           <span class="navbar-toggler-icon"></span>
         </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
               <a class="nav-link" href="index.php">Inicio <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Producto  
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="<?php echo getUrl("Producto","Producto","getInsert")?>">Registrar</a>
                   <a class="dropdown-item" href="<?php echo getUrl("Producto","Producto","consult")?>">Consultar</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 Categoría
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                   <a class="dropdown-item" href="<?php echo getUrl("Categoría","Categoría","getInsert")?>">Registrar</a>
                   <a class="dropdown-item" href="<?php echo getUrl("Categoría","Categoría","consult")?>">Consultar</a>
                </div>
            </li>
        </ul>
        <?php
           if (isset($_SESSION['nombre'])){
        ?> 
           <ul class="navbar-nav">
              <li class="nav-item dropdown">
                 <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                 role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <?=$_SESSION['nombre']?>
                 </a>
                 <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="<?php echo getUrl("Acceso","Acceso","logout");?>">Cerrar Sesion</a>
                 </div>
              </li>
           </ul>
        <?php
           }
        ?> 
    </div>
</nav>