<?php
namespace app\controllers;
use app\core\Controller;

class PessoaFoneController extends Controller{
    
   public function index(){
       echo "Método index";
   } 
   
   public function ver(){
       $this->load("v_pessoa");
   }
   public function lista(){
       echo "<br>estou listando os Pessoas<br>";
   } 
   
   
}
