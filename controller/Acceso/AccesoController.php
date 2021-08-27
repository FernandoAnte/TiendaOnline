<?php
   include_once '../model/Acceso/AccesoModel.php';

  class AccesoController{

    public function login(){

        $usuario=$_POST['usuario'];
        $pass=$_POST['clave'];
        $obj=new AccesoModel();

        $sql="SELECT idUsuario, nomUsuario, apellUsuario, idRol FROM usuario WHERE claveUsuario='$pass' AND correoUsuario ='$usuario'";

        $user=$obj->consult($sql);

        if (mysqli_num_rows($user)>0) {

            foreach ($user as $us){
                $_SESSION['id']=$us['idUsuario'];
                $_SESSION['nombre']=$us['nomUsuario'];
                $_SESSION['apellido']=$us['apellUsuario'];
                $_SESSION['Rol'] = $us['idRol'];
                $_SESSION['auth'] = "ok"; 
            }
            if ($_SESSION['Rol']==1) {
                redirect("admin.php");
            }else{
                redirect("index.php"); 
            }
           
        }else{
            $_SESSION['mensaje'] = "el correo/nickname y/o contraseña son incorrectos";
            redirect("login.php"); 
        }
    }
    
    public function logout(){
        session_destroy();
        redirect("login.php");
    }
}
?>