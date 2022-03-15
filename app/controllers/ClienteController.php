<?php
namespace app\controllers;
use app\core\Controller;
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

   public function edit ($id_cliente){
   $cliente = new Cliente();
   
   $dados["cliente"] = $cliente->getCliente($id_cliente);
   $dados["view"] = "cliente/Edit";
   $this->load("template", $dados);

	}

	public function delete($id_cliente, $excluir=NULL){
		$cliente = new Cliente();

		if($excluir=="S"){
			$cliente->excluir($id_cliente);
		header("location:" . URL_BASE ."cliente");
		exit;
		}

		$dados["view"] = "cliente/Delete";
		$this->load("template", $dados);
	}


   public function salvar(){
   	$cliente  	= new Cliente();
   	$id_cliente = isset ($_POST["id_cliente"]) ? strip_tags(filter_input(INPUT_POST,"id_cliente" )) : NULL;
   	$nome   	= isset ($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST,"nome" )) : NULL;
   	$cpf   		= isset ($_POST["cpf"]) ? strip_tags(filter_input(INPUT_POST,"cpf" )) : NULL;
   	$email   	= isset ($_POST["email"]) ? strip_tags(filter_input(INPUT_POST,"email" )) : NULL;
   	$telefone   = isset ($_POST["telefone"]) ? strip_tags(filter_input(INPUT_POST,"telefone" )) : NULL ;
   	$endereco   = isset ($_POST["endereco"]) ? strip_tags(filter_input(INPUT_POST,"endereco" )) : NULL;
   	$cep   		= isset ($_POST["cep"]) ? strip_tags(filter_input(INPUT_POST,"cep" )) : NULL;

 /* echo $nome . "/". $cpf ."/" . $email . "/" . $telefone . "/" . $endereco . "/" . $cep ;
  exit();*/

  		if($id_cliente){
   			$cliente->editar($nome, $cpf, $email, $telefone, $endereco, $cep);
   		}else{

   			$cliente->inserir($nome, $cpf, $email, $telefone, $endereco, $cep);
   		}

   		/*echo "<prev>";
   	      print_r($cliente);
        exit;
        */
   		header("location:" . URL_BASE ."cliente");
   }
}
