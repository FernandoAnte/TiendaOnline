<h1 class="mt-4">Productos</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
    <li class="breadcrumb-item active">Productos</li>
</ol>
<a href="<?php echo getUrlAdmin("Producto", "Producto", "getInsert") ?>"><button class="btn btn-primary">Insertar</button></a>
<div class="card mt-4">
    <div class="card-header">
        <!--<i class="fas fa-table me-1"></i>  -->
           Consultar productos
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover" id="datatablesSimple">
            <thead>
                <tr>
                    <th>Marca</th>
                    <th>Producto</th>
                    <th>Cantidad</th>
                    <th>Precio</th>
                    <th>Imagen</th>
                    <th>Editar</th>
                    <th>Eliminar</th>
                </tr>
                <img src='' alt="" width='55px' height='55px'>
            </thead>
            <tbody id="tbody">
                <?php
                foreach ($producto as $prod) {
                    echo "</tr>";
                        echo "<td>" . $prod['idMarca'] . "</td>";
                        echo "<td>" . $prod['nomProd'] . "</td>";
                        echo "<td>" . $prod['cantProd'] . "</td>";   
                        echo "<td>" . $prod['precProd'] . "</td>";
                        echo "<td> <img src='" . $prod['imagProd'] . "' alt='' width='55px' height='55px'></td>";
                      

                        echo "<td><a href='".getUrlAdmin("Producto","Producto","getUpdate", array("id" => $prod['idProd']))."'><button class='btn btn-primary' type='button'>Editar</button></a></td>";
                        echo "<td><a href='".getUrlAdmin("Producto","Producto","getDelete", array("id" => $prod['idProd']))."'><button class='btn btn-danger'type='button'>Eliminar</button></a></td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>
