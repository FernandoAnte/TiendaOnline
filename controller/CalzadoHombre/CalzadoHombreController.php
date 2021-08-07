<?php

   include_once '../model/CalzadoHombre/CalzadoHombreModel.php';

   class CalzadoHombreController
   {
       public function getInsert(){

         include_once '../view/CalzadoHombre/tenis.php';
         //include_once '../view/CalzadoMujer/Botín.php';

       }
       public function postInsert(){
           $obj= new CalzadoHombreModel();
           $dep_nombre=$_POST['dep_nombre'];
           $sql="INSERT INTO CalzadoHombre VALUE(null,'$dep_nombre')";
           $ejecutar = $obj->insert($sql);

           if ($ejecutar) {
               redirect(getUrl("CalzadoHombre","CalzadoHombre","getInsert"));
           }else{
               echo "ha ocurrido un error";
           }
       }
       public function consult(){
           $obj=new CalzadoHombreModel();

           $sql="SELECT * FROM CalzadoHombre";
           $CalzadoHombre=$obj-> consult($sql);
           include_once '../view/CalzadoHombre/consult.php';
       }
       public function getUpdate(){
           $obj=new CalzadoHombreModel();
           $dep_id=$_GET['dep_id'];

           $sql="SELECT *FROM CalzadoHombre WHERE dep_id=$dep_id";
           $CalzadoHombre=$obj-> consult($sql);

           include_once '../view/CalzadoHombre/update.php';
       }
       public function postUpdate(){
           $obj=new CalzadoHombreModel();
           $dep_id=$_POST['dep_id'];
           $dep_nombre=$_POST['dep_nombre'];

           $sql="UPDATE CalzadoHombre SET dep_nombre='$dep_nombre' WHERE dep_id=$dep_id";
           $ejecutar=$obj-> update($sql);

           if ($ejecutar) {
               redirect(getUrl("CalzadoHombre","CalzadoHombre","consult"));
               
           }else{
               echo "Ha ocurrido un error";
           }
       }
   }
?>