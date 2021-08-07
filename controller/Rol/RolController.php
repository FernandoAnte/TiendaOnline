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
        include_once '../View/Rol/crear.php';
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
        include_once '../View/Rol/consultar.php';
    }

    public function getEditar()
    {
        if (isset($_GET)) {
            $id = $_GET['id'];
            $sql = "SELECT * FROM rol where idRol = $id ";

            $rol = $this->objRol->consult($sql);
            $r=mysqli_fetch_assoc($rol);
            include_once '../View/Rol/editar.php';
        } else {
            echo "No llegaron los datos para Registrar";
        }
    }

    public function postEditar()
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


    public function getDeleteModal(){
        $id=$_POST['id'];

        $sql="SELECT * FROM Rol WHERE idRol=$id";
        $rol = $this->objRol->consult($sql);

        include_once '../view/ciudad/deleteModal.php';

    }

    public function postDelete(){
        
        $ciu_id=$_POST['ciu_id'];
        $ciu_imagen=$_POST['ciu_imagen'];

        $sql="DELETE FROM ciudad WHERE ciu_id=$ciu_id";

        $ejecutar= $obj->consult($sql);

        if ($ejecutar) {
            unlink($ciu_imagen);
            redirect(getUrl("Ciudad","Ciudad","consult"));
        }else{
            echo "algo salió mal";
        }

    }

    public function filtrar()
    {
    }
}
