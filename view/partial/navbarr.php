
  <nav class="navbar" style="background-color: #0eaa18">  <!--light bg-light --> <!-- style="background-color: #BF8F4E;" -->
    <div class="container mt-4">
      <a class="navbar-brand" style="color:#fff" href="index.php"><h1>CalzAnte</h1></a>
      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Buscar..." aria-label="Search">
        <button class="btn btn-secondary" type="submit">Buscar</button>
      </form>
    </div>
  </nav>      
  <nav class="navbar navbar-expand-lg "><!-- navbar-light bg-light -->
         <!--  <a class="navbar-brand" href="#"></a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon"></span>
          </button> -->
      <div class=" row-12 container collapse navbar-collapse mt-4" id="navbarSupportedContent">
          <ul class="navbar-nav mr-auto">
              <div class="">
                <li class="nav-item active">
                  <a class="nav-link btn btn-secondary" href="index.php"><b>INICIO</b><span class="sr-only">(current)</span></a>
                </li>
              </div>
              
              <div class="col">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                      <b>CALZADO HOMBRE</b>
                    </a>
                    <div class="dropdown-menu btn btn-light" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="<?php echo getUrl("CalzadoHombre","CalzadoHombre","getInsert")?>">Tenis</a>   <!-- Departamento","Departamento","getInsert -->
                      <a class="dropdown-item" href="">Botín</a>
                      <a class="dropdown-item" href="">Casual</a>
                      <a class="dropdown-item" href="">Formal</a>
                    </div>
                </li>
              </div>
                
              <div class="col">
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle btn btn-secondary" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <b>CALZADO MUJER</b>
                    </a>
                    <div class="dropdown-menu btn btn-light" aria-labelledby="navbarDropdown">
                      <a class="dropdown-item" href="">Tenis</a>
                      <a class="dropdown-item" href="<?php echo getUrl("CalzadoMujer","CalzadoMujer","getInsert")?>">Botín</a>
                      <a class="dropdown-item" href="">Zandalia</a>
                      <a class="dropdown-item" href="">Baleta</a>
                    </div>
                </li>
              </div>

              <div class="col-6">
                 <li class="nav-item active">
                   
                 </li>
              </div>
              <div class="col-3">   
                <li class="nav-item active">
                  <a class="nav-link btn btn-outline-secondary" href="login.php">MI CUENTA</a>
                </li>
              </div>
              <div class="col-3">
                <button class="btn btn-outline-secondary" >
                    <span class="fas fa-shopping-cart"></span>
                </button>
              </div>
          </ul> 
      </div>
  </nav>
