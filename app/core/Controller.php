<?php
namespace app\core;

// carrega a view 
class Controller{
     public function load($viewName, $viewData=array()){
       extract($viewData); 
       
       include "app/views/" . $viewName .".php";

































































       
   }
}
