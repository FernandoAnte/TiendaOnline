<h1 class="mt-4">Productos</h1>
<ol class="breadcrumb mb-4">
    <li class="breadcrumb-item"><a href="index.html">Admin</a></li>
    <li class="breadcrumb-item active">Productos</li>
</ol>
<a href="<?php echo getUrlAdmin("Producto", "Producto", "getInsert") ?>"><button>Insertar</button></a>
<div class="card mt-4">
    <div class="card-header">
        <!--<i class="fas fa-table me-1"></i>  -->
           Consultar productos
    </div>
    <div class="card-body">
        <table class="table table-striped table-hover" id="datatablesSimple">
            <thead>
                <tr>
                    <th>idMarca</th>
                    <th>nomProd</th>
                    <th>cantProd</th>
                    <th>precProd</th>
                    <th>imagProd</th>
                    <th>Editar</th>
                    <th>Estado</th>
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
                      

                        echo "<td><a href='".getUrlAdmin("Producto","Producto","getEditar", array("id" => $prod['idProd']))."'><button type='button' >Editar</button></a></td>";
                        echo "<td><a><button type='button'>Eliminar</button></a></td>";

                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
    </div>
</div>