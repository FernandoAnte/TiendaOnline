<?php

    include_once '../Model/Producto/ProductoModel.php';

    class ProductoController {

        private $obj;

    /*     public function __construct()
        {

            $this->objProducto = New ProductoModel();

        } */

        public function getInsert()
        {
             $obj=new ProductoModel();
             
            $sql="SELECT * FROM categoria";
            $categoria=$obj->consult($sql); 
            include_once '../View/Producto/insert.php';
        }

        public function postInsert(){

            $obj=new ProductoModel();

            $nomProd=$_POST['nomProd'];
            $idMarca=$_POST['idMarca'];
            $cantProd=$_POST['cantProd'];
            $descProd=$_POST['descProd'];
            $colorProd=$_POST['colorProd'];
            $precProd=$_POST['precProd'];
            $idCateg=$_POST['idCateg'];
            $imagProd=$_POST['imagProd'];
            $idProd=$obj->autoIncrement("idProd","producto");
             
            $sql="INSERT INTO producto values ($idProd,$idMarca,$idCateg,'$nomProd',$precProd,$cantProd,'$descProd','$colorProd','$imagProd')";
            $ejecutar=$obj->insert($sql);

            if($ejecutar){
                for ($i=0; $i < count($idCateg); $i++){
                     $idCatProd = $obj-> autoIncrement("idCatProd","categoria_producto");
                     $sql="INSERT INTO categoria_producto values ($idCatProd,$idProd,$idCateg)";
                     $ejecutar = $obj->insert($sql);
                }
                redirect(getUrl("Producto","Producto","getInsert"));
             /*    $idProd = $_POST['idProd'];
                $id = $this->objProducto->autoIncrement("idProd","producto");
                $sql="INSERT INTO producto values ($id,'$nomProd',$cantProd,$precProd)";
                $this->objProducto->insert($sql);
                $this->objProducto->close(); */
            }else {
                echo "ups, ha ocurrido un error";
            }
        }


        public function consultar() {

            $obj=new ProductoModel();

            $sql="SELECT * FROM producto ";
            $producto= $this->obj->consult($sql);
            include_once '../View/Producto/consultar.php';
        }


        public function getEditar() {

            $obj=new ProductoModel();

            
            include_once '../View/Producto/editar.php';
        }


        public function editar() {
            $obj=new ProductoModel();

            
        }


        public function eliminar() {
            $obj=new ProductoModel();

            
        }


        public function filtrar() {

        }
    }
?>