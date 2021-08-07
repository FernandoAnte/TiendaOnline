<?php

session_start();

function redirect($url)
{
   echo "<script type='text/javascript'>"
      . "window.location.href='$url'"  // funcion para redireccionar a javascript
      . "</script>";
}
function dd($var)
{ // funcion que imprime la informacion que se le indique
   echo "<pre>";
   die(print_r($var));  // funcion print_r, imprime todo un array
}

function getUrl($modulo, $controlador, $funcion, $parametros = false, $ajax = false)
{
   if ($ajax == false) {
      $pagina = "index";
   } else {
      $pagina = "ajax";
   }

   $url = "$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";


   if ($parametros != false) {
      foreach ($parametros as $key => $valor) {
         $url .= "&$key=$valor";
      }
   }

   return $url;
}
function resolve()
{

   $modulo = ucwords($_GET['modulo']); //ucwords convierter la primer letra en mayuscula
   $controlador = ucwords($_GET['controlador']);
   $funcion = $_GET['funcion'];

   if (is_dir("../controller/$modulo")) {

      if (file_exists("../controller/$modulo/" . $controlador . "Controller.php")) {
         include_once "../controller/$modulo/" . $controlador . "Controller.php";
         $nombreClase = $controlador . "Controller";
         $objClase = new $nombreClase();
         if (method_exists($objClase, $funcion)) {
            $objClase->$funcion();
         } else {
            echo "El metodo especificado no existe";
         }
      } else {
         echo "El controlador especificado no existe";
      }
   } else {
      echo "El modulo especificado no existe";
   }
}

function getUrlAdmin($modulo,$controlador,$funcion,$parametros=false, $ajax=false)
{
    if($ajax==false)
    {
        $pagina="admin";
    }
    else
    {
        $pagina="ajax";
    }

    $url="$pagina.php?modulo=$modulo&controlador=$controlador&funcion=$funcion";


    if($parametros!=false){
            foreach($parametros as $key=>$valor){
                    $url.="&$key=$valor";
            }
    }

    return $url;
}
