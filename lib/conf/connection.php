<?php
   Class Connection            // clase
   {
       private $server;         // variables
       private $user;
       private $pass;
       private $port;
       private $database;
       private $link;          // almacena la conexion a la base de datos


       function __construct(){    //nos permite crear la ejecucion automatica del metodo
        $this -> setConnect();    // nos pasa la informacion de config a las variables q acabamos de crear arriba
        $this -> connect();
       } 


        private function setConnect(){  // el metodo setConnect, asigna
           require_once 'config.php';  // si o si requiere la inclusion del archivo
           $this -> server=$server;    // pasando la informacion  de config a connetion
           $this -> user=$user;
           $this -> pass=$pass;
           $this -> port=$port;
           $this -> database=$database;
        }


        private function connect(){
               $this->link=mysqli_connect($this->server,$this->user,$this->pass,$this->database);// estableciendo la conexion con la base de datos almacenada en la var link
               if(!$this->link){  // validar si existe la conexion
                 die(mysqli_error($this->link)); // si es falso,para la ejecucion y muestra error
               }else{
                  // echo"¡Conexion exitosaaaaa!";
               }
           }


        public function getConnect(){  //   devuelve
               return $this->link;
           }

           
        public function close(){  // nos permite cerrar la conexion con mysql
               mysqli_close($this->link);
           }
 
   }
