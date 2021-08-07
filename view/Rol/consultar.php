<h1 class="mt-4">Roles</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
    <li class="breadcrumb-item active">Rol</li>
</ol>
<a href="<?php echo getUrlAdmin("Rol", "Rol", "getInsert") ?>"><button>Insertar</button></a>
<div class="card mt-4">
    <div class="card-header">
        <!--<i class="fas fa-table me-1"></i>  -->
           Consultar Roles
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover" id="datatablesSimple">
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Rol</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                foreach ($rol as $rol) {

                    echo "<td>" . $rol['idRol'] . "</td>";
                    echo "<td>" . $rol['descRol'] . "</td>";
                    
                    echo "<td><a href='".getUrlAdmin("Rol","Rol","getEditar", array("id" => $rol['idRol']))."'><button type='button' >Editar</button></a></td>";
                    echo "<td><a><button id='eliminarModal' type='button'data-toggle='modal' data-target='#exampleModal' data-id='".$rol['idRol']."' data-url='".getUrl(
                        `Rol`,`Rol`,`getDeleteModal`,false,`ajax`)."'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>