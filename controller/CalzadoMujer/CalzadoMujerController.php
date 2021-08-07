<?php

   include_once '../model/CalzadoMujer/CalzadoMujerModel.php';

   class CalzadoMujerController
   {
       public function getInsert(){

         include_once '../view/CalzadoMujer/Botín.php';

       }
       public function postInsert(){
           $obj= new CalzadoMujerModel();
           $dep_nombre=$_POST['dep_nombre'];
           $sql="INSERT INTO CalzadoMujer VALUE(null,'$dep_nombre')";
           $ejecutar = $obj->insert($sql);

           if ($ejecutar) {
               redirect(getUrl("CalzadoMujer","CalzadoMujer","getInsert"));
           }else{
               echo "ha ocurrido un error";
           }
       }
       public function consult(){
           $obj=new CalzadoMujerModel();

           $sql="SELECT * FROM CalzadoMujer";
           $CalzadoMujer=$obj-> consult($sql);
           include_once '../view/CalzadoMujer/consult.php';
       }
       public function getUpdate(){
           $obj=new CalzadoMujerModel();
           $dep_id=$_GET['dep_id'];

           $sql="SELECT *FROM CalzadoMujer WHERE dep_id=$dep_id";
           $CalzadoMujer=$obj-> consult($sql);

           include_once '../view/CalzadoMujer/update.php';
       }
       public function postUpdate(){
           $obj=new CalzadoMujerModel();
           $dep_id=$_POST['dep_id'];
           $dep_nombre=$_POST['dep_nombre'];

           $sql="UPDATE CalzadoMujer SET dep_nombre='$dep_nombre' WHERE dep_id=$dep_id";
           $ejecutar=$obj-> update($sql);

           if ($ejecutar) {
               redirect(getUrl("CalzadoMujer","CalzadoMujer","consult"));
               
           }else{
               echo "Ha ocurrido un error";
           }
       }
   }
?>