<?php

    include_once '../Model/Usuario/UsuarioModel.php';

    class UsuarioController {

        private $objUsuario;

        public function __construct()
        {

            $this->objUsuario = New UsuarioModel();

        }

        public function getInsert()
        {
            include_once '../View/Usuario/crear.php';
        }

        public function postInsert()
        {
            if(isset($_POST)){

                $nombre = $_POST['nombre'];
                $id = $this->objUsuario->autoIncrement("idUsuario","usuario");
                $sql="INSERT INTO usuario values ($id,'$nombre')";
                $this->objUsuario->insert($sql);
                $this->objUsuario->close();
            // redirect(getUrlAdmin("Rol","Rol","consultar"));

            }else {
                echo "No llegaron los datos para Registrar";
            }
        }

        public function consultar()
        {
            $sql="SELECT * FROM usuario ";
            $usuario= $this->objUsuario->consult($sql);
            include_once '../View/Usuario/consultar.php';
        }

        public function getEditar()
        {
            
            include_once '../View/Usuario/editar.php';
        }

        public function editar()
        {
            
        }

        public function eliminar()
        {
            
        }

        public function filtrar()
        {

        }
    }
?>