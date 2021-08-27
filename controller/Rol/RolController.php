<?php

include_once '../Model/Rol/RolModel.php';

class RolController
{

    private $objRol;

    public function __construct()
    {

        $this->objRol = new RolModel();
    }

    public function getInsert()
    {
        include_once '../View/Rol/insert.php';
    }

    public function postInsert()
    {
        if (isset($_POST)) {

            $nombre = $_POST['nombre'];
            $id = $this->objRol->autoIncrement("idRol", "rol");
            $sql = "INSERT INTO rol values ($id,'$nombre')";
            $this->objRol->insert($sql);
            $this->objRol->close();
             redirect(getUrlAdmin("Rol","Rol","consultar"));

        } else {
            echo "No llegaron los datos para Registrar";
        }
    }

   

    public function consultar()
    {
        $sql = "SELECT * FROM rol ";
        $rol = $this->objRol->consult($sql);
        include_once '../View/Rol/consult.php';
    }

    public function getUpdate()
    {
        if (isset($_GET)) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM rol where idRol = $id ";
            $rol = $this->objRol->consult($sql);
            $r=mysqli_fetch_assoc($rol);
            include_once '../View/Rol/update.php';
        } else {
            echo "No llegaron los datos para Registrar";
        }
    }

    public function postUpdate()
    {
        if(isset($_POST)){
            
            $id = $_POST['id'];
            $name = $_POST['nombre'];
            $sql="UPDATE rol SET  descRol='$name' WHERE idRol = $id";
            $this->objRol->update($sql);
            $this->objRol->close();
            redirect(getUrlAdmin("Rol","Rol","consultar"));
   
        }else {
                echo "No llegaron datos para Editar";
        }
    }


    public function getDelete(){

        $id=$_GET['id'];
        $sql="SELECT * FROM Rol WHERE idRol=$id";
        $rol = $this->objRol->delete($sql);

        include_once '../view/Rol/delete.php';

    }

    public function postDelete(){
        if (isset($_POST)){
        $idRol=$_POST['idRol'];
        $sql="DELETE  FROM rol WHERE idRol= $idRol";
        $this->objRol->insert($sql);
        $this->objRol->close();
        redirect(getUrlAdmin("Rol","Rol","consultar"));
        }else{
            echo "epa nada";
        }
    }

   

    public function filtrar()
    {

    }
}
