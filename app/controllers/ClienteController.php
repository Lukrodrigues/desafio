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

   /*var_dump($dados);
   exit;*/

   $this->load("template", $dados);

	}

	public function delete($id_cliente, $excluir=NULL){
		$cliente = new Cliente();

		if($excluir=="S"){
			$cliente->excluir($id_cliente);
		header("location:" . URL_BASE ."cliente");
		exit;
		}

		$dados["cliente"] = $cliente->getCliente($id_cliente);
		$dados["view"] = "cliente/Delete";
		$this->load("template", $dados);
	}


   public function salvar(){
   	$cliente  	= new Cliente();
   	
   	$nome   	= isset ($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST,"nome" )) : NULL;
   	$cpf   		= isset ($_POST["cpf"]) ? strip_tags(filter_input(INPUT_POST,"cpf" )) : NULL;
   	$email   	= isset ($_POST["email"]) ? strip_tags(filter_input(INPUT_POST,"email" )) : NULL;
   	$data_nascimento   = isset ($_POST["data_nascimento"]) ? strip_tags(filter_input(INPUT_POST,"date" )) : NULL ;
   	$endereco   = isset ($_POST["endereco"]) ? strip_tags(filter_input(INPUT_POST,"endereco" )) : NULL;
   	$cep   		= isset ($_POST["cep"]) ? strip_tags(filter_input(INPUT_POST,"cep" )) : NULL;
   	$id_cliente = isset ($_POST["id_cliente"]) ? strip_tags(filter_input(INPUT_POST,"id_cliente" )) : NULL;

/*
 echo $nome . "/". $cpf ."/" . $email . "/" . $data_nascimento . "/" . $endereco . "/" . $cep ;
  exit();*/

  		if($id_cliente){
   			$cliente->editar($id_cliente,$nome, $cpf, $email, $data_nascimento, $endereco, $cep);
   		}else{

   			$cliente->inserir($nome, $cpf, $email, $data_nascimento, $endereco, $cep);
   		}

   	/*	echo $nome . "/". $cpf ."/" . $email . "/" . $telefone . "/" . $endereco . "/" . $cep ;
  exit();*/

   	/*	echo "<prev>";
   	      print_r($cliente);
        exit; */
        
   		header("location:" . URL_BASE ."cliente");
   }
}
