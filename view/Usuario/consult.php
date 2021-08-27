<h1 class="mt-4">Usuarios</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
    <li class="breadcrumb-item active">Usuario</li>
</ol>
<a href="<?php echo getUrlAdmin("Usuario", "Usuario", "getInsert") ?>"><button class='btn btn-primary'>Insertar</button></a>
<div class="card mt-4">
    <div class="card-header">
        <!--<i class="fas fa-table me-1"></i>  -->
           Consultar Usuarios
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover" id="datatablesSimple">
            <thead>
                <tr>
                    <th>Id</th>
                    <th>Nombre</th>
                    <th>Apellido</th>
                    <th>Teléfono</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                foreach ($usuario as $usu) {

                    echo "<td>" . $usu['idUsuario'] . "</td>";
                    echo "<td>" . $usu['nomUsuario'] . "</td>";
                    echo "<td>" . $usu['apellUsuario'] . "</td>";
                    echo "<td>" . $usu['telUsuario'] . "</td>";
             
                    echo "<td><a><button type='button'class='btn btn-primary'>Editar</button></a></td>";
                    echo "<td><a><button type='button'class='btn btn-danger'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>