<?php

    include_once '../Model/Producto/ProductoModel.php';

    class ProductoController {

        private $objProducto;

        public function __construct()
        {

            $this->objProducto = New ProductoModel();

        }

        public function getInsert()
        {
            include_once '../View/Producto/insert.php';
        }

        public function postInsert(){
            if(isset($_POST)){
                $nombre = $_POST['nombre'];
                $id = $this->objProducto->autoIncrement("idProd","producto");
                $sql="INSERT INTO producto values ($id,'$nombre')";
                $this->objProducto->insert($sql);
                $this->objProducto->close();
            }else {
                echo "No llegaron los datos para Registrar";
            }
        }


        public function consultar() {
            $sql="SELECT * FROM producto ";
            $producto= $this->objProducto->consult($sql);
            include_once '../View/Producto/consultar.php';
        }


        public function getEditar() {
            
            include_once '../View/Producto/editar.php';
        }


        public function editar() {
            
        }


        public function eliminar() {
            
        }


        public function filtrar() {

        }
    }
?>