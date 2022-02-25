<?php
namespace app\controllers;
use \app\core\Controller;
use app\models\Cliente;

//buscar a view no controler template
class ClienteController extends Controller{
    
   public function index(){
   	$cliente = new Cliente();

   	$dados["clientes"] = $cliente->lista();
// quando entrar na view busca os dados
   	$dados["view"] = "cliente/Index";
			

   	$this->load("template", $dados);
       
   } 

   public function novo(){
   	$dados["view"] = "cliente/Create";
   	$this->load("template", $dados);
   }

   public function salvar(){
   	$cliente  = new Cliente();

   	$nome   	= isset ($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST,"nome" )) : NULL;
   	$email   	= isset ($_POST["cpf"]) ? strip_tags(filter_input(INPUT_POST,"cpf" )) : NULL;
   	$endereco   = isset ($_POST["email"]) ? strip_tags(filter_input(INPUT_POST,"email" )) : NULL;
   	$telefone   = isset ($_POST["fone"]) ? strip_tags(filter_input(INPUT_POST,"telefone" )) : NULL ;
   	$cep   		= isset ($_POST["endereco"]) ? strip_tags(filter_input(INPUT_POST,"endereco" )) : NULL;
   	$cpf   		= isset ($_POST["cep"]) ? strip_tags(filter_input(INPUT_POST,"cep" )) : NULL;

   	/*echo $nome . "/". $email ."/" . $telefone . "/" . $cpf . "/" . $endereco . "/" . $cep ;*/

   

   		$cliente->inserir($nome, $cpf, $email, $telefone, $endereco, $cep);

   		/*echo "<prev>";
   	      print_r($cliente);
        exit;*/

   		header("location:" . URL_BASE ."cliente");
   }
}
