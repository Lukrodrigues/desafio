<?php
namespace app\controllers;
use \app\core\Controller;

//buscar a view no controler template
class HomeController extends Controller{
    
   public function index(){
   	$dados["view"] = "Index";
   	$this->load("template");
       
   } 
}
