<?php

    include_once '../Model/Producto/ProductoModel.php';  // incluyendo modelo (productoModel)

    class ProductoController { 

        private $objProducto;

         public function __construct()  // para no repetir el objeto en cada funcion
        {

            $this->objProducto = New ProductoModel();

        } 

        public function getInsert()  // para cargar el formulario y poder insertar lo que necesitemos
        {
                      
            $sql="SELECT * FROM categoria";
            $categoria=$this->objProducto->consult($sql); 
            $sql="SELECT * FROM marca";
            $marcas=$this->objProducto->consult($sql); 
            $sql="SELECT * FROM proveedor";
            $proveedor=$this->objProducto->consult($sql); 
            include_once '../View/Producto/insert.php';  // incluyendo la vista 
        }

        public function postInsert(){
      

            $nomProd=$_POST['nomProd'];
            $idMarca=$_POST['idMarca'];
            $cantProd=$_POST['cantProd'];
            $descProd=$_POST['descProd'];
            $colorProd=$_POST['colorProd'];
            $precProd=$_POST['precProd'];
            $idProve=$_POST['idProve'];
            $idCateg=$_POST['idCateg'];
            $idProd=$this->objProducto->autoIncrement("idProd","producto");

            if (isset($_FILES['imagProd'])) {
                $ext = explode(".", $_FILES['imagProd']['name']);
                $name_img = "producto-" . $idProd;
                $ruta_temp = $_FILES['imagProd']['tmp_name'];
                $ruta_img = 'imagen/producto/' . $name_img . '.' . end($ext);

                if (move_uploaded_file($ruta_temp, $ruta_img)) {
                    $imagen = $ruta_img;
                }
            } else {
                $imagen = "No hay Imagen";
            }
            $sql="INSERT INTO producto values ($idProd,$idMarca,'$nomProd',$precProd,$cantProd,'$descProd','$colorProd','$imagen',$idProve,$idCateg)";
            $ejecutar=$this->objProducto->insert($sql);

            if($ejecutar){
                redirect(getUrlAdmin("Producto","Producto","getInsert"));
                
            }else {
                echo "ups, ha ocurrido un error";
            }
        }
        public function consultar() {

           // $obj=new ProductoModel();

            $sql="SELECT * FROM producto ";
            $producto=$this->objProducto->consult($sql);
            include_once '../View/Producto/consult.php';
        }

        public function getUpdate() {
            if (isset($_GET)) {
                $id = $_GET['id'];
                $sql = "SELECT * FROM producto where idProd = $id ";
                $producto = $this->objProducto->consult($sql);
                $p=mysqli_fetch_assoc($producto);
                include_once '../View/Producto/update.php';
            } else {
                echo "No llegaron los datos para Registrar";
            }
        }

        public function postUpdate()
    {
        if(isset($_POST)){
            
            $id = $_POST['idProd'];
            $name = $_POST['nomProd'];
            $sql="UPDATE producto SET  nomProd='$name' WHERE idProd = $id";
            $this->objProducto->update($sql);
            $this->objProducto->close();
            redirect(getUrlAdmin("Producto","Producto","consult"));
   
        }else {
                echo "No llegaron datos para Editar";
        }
    }

        public function getDelete(){

            $id=$_GET['id'];
            $sql="SELECT * FROM producto WHERE idProd=$id";
            $producto= $this->objProducto->delete($sql);
    
            include_once '../view/Producto/delete.php';
        }
    
        public function postDelete(){
            if (isset($_POST)){
            $idProd=$_POST['idProd'];
            $sql="DELETE  FROM producto WHERE idProd= $idProd";
            $this->objProducto->insert($sql);
            $this->objProducto->close();
            redirect(getUrlAdmin("Producto","Producto","consultar"));
            }else{
                echo "epa nada";
            }
        }
    }
?>