<?php

    include_once '../Model/Carrito/CarritoModel.php';  // incluyendo modelo (CarritoModel)

    class CarritoController { 

        private $objCarrito;

         public function __construct()  // para no repetir el objeto en cada funcion
        {

            $this->objCarrito = New CarritoModel();

        } 
         public function addCart(){

            if (isset($_SESSION['auth'])){
                $userId=$_SESSION['id'];
                $sql="SELECT * FROM carrito where idUsuario=$userId";
                $carrito=$this->objCarrito->consult($sql);
                $idCar=99;


                if (mysqli_num_rows($carrito) > 0) {
                    foreach ($carrito as $car){
                        
                       $idCar = $car['idCarrito'];
                    } 
                   // echo "<div class='bg-primary'>".$idCar."</div>";
                }else{
                    $idCar = $this->objCarrito->autoIncrement("idCarrito", "carrito");
                    $sql="INSERT INTO carrito(idCarrito, idUsuario) VALUES ($idCar,$userId)";
                    $this->objCarrito->insert($sql);
                }


                if (isset($_POST)){
                    $idProd=$_POST['id'];
                    $cantidad=$_POST['cantidad'];
                    $sql="SELECT * FROM detallecarrito where idProd=".$idProd." AND idCarrito=$idCar";
                    $num=$sql;
                    $detallecarrito=$this->objCarrito->consult($sql);
                   /*  foreach ($variable as $) {
                        # code...
                    } */
                   // $num= mysqli_num_rows($detallecarrito);


                    if (mysqli_num_rows($detallecarrito) > 0){
                        foreach ($detallecarrito as $dc) {
                            $cant=$dc["cantProd"]+$cantidad;
                        }
                        $sql="UPDATE `detallecarrito` SET `cantProd`='$cant' WHERE idProd = $idProd";
                        $this->objCarrito->update($sql);

                    }else{

                        foreach ($carrito as $dc) {
                         $idCarD = $this->objCarrito->autoIncrement("idDetCarrito", "detallecarrito");
                         $sql="INSERT INTO detallecarrito(idDetCarrito, idCarrito,idProd,cantProd) VALUES ($idCarD,$idCar,$idProd,$cantidad)";
                         $this->objCarrito->insert($sql);
                        }
                    }



                    $sql="SELECT * FROM detallecarrito where idCarrito=$idCar";                 
                    $num=$sql;
                    $cantidadCarrito=$this->objCarrito->consult($sql);
                    $_SESSION['cantCarrito']= mysqli_num_rows($cantidadCarrito);
                    $c=$_SESSION['cantCarrito'];
                    $status="ok";
                    
                    $col = array();

                    $col = ["cont" => "$c","status" => "$status","c" => "$num"];
                    $myObj = new \stdClass();
                    $myObj->info = $col;
                    $myJSON = json_encode($myObj);
                    return print_r($myJSON);


                } else{
                    $status="no llegó el codigo del producto";
                }
            }else{
                redirect("login.php");
            }  
         }
        public function consultar() {

          /*   $sql="SELECT * FROM Carrito ";
            $Carrito=$this->objCarrito->consult($sql);
            include_once '../View/Carrito/consult.php'; */
        }

    }
?>