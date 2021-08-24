<h1 class="mt-4">Roles</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
    <li class="breadcrumb-item active">Rol</li>
</ol>
<a href="<?php echo getUrlAdmin("categoria", "categoria", "getInsert") ?>"><button>Insertar</button></a>
<div class="card mt-4">
    <div class="card-header">
        <!--<i class="fas fa-table me-1"></i>  -->
           Consultar Categorias
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover" id="datatablesSimple">  <!--id="datatablesSimple"-->
            <thead>
                <tr>
                    <th>Codigo</th>
                    <th>Categoria</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
            </thead>
            <tbody id="tbody">
                <?php
                foreach ($categ as $cat) {

                    echo "<td>" . $cat['idCateg'] . "</td>";
                    echo "<td>" . $cat['nomCateg'] . "</td>";
                    
                    echo "<td><a href='".getUrlAdmin("Categoria","Categoria","getEditar", array("id" => $cat['idCateg']))."'><button type='button'>Editar</button></a></td>";
                    echo "<td><a href='".getUrlAdmin("Categoria","Categoria","getDelete", array("id" => $cat['idCateg']))."'><button type='button'>Eliminar</button></a></td>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>