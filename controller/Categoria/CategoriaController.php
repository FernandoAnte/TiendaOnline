<?php
   include_once '../Model/Categoria/CategoriaModel.php';

   class CategoriaController{

       
       public function getInsert(){
           include_once '../view/Categoria/insert.php';
       }

       public function consultar()
    {
        $sql = "SELECT * FROM categoria ";
        $categoria = $this->objCategoria->consult($sql);
        include_once '../View/Categoria/consultar.php';
    } 

 
       

   }
?>