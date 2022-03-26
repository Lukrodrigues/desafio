<?php
namespace app\controllers;
use app\core\Controller;
use app\models\Cliente;

//buscar a view no controler template
class ProdutoController extends Controller{
    
   public function index(){
   	$produto = new Produto();

   	$dados["produtos"] = $produto->lista();
// quando entrar na view busca os dados
   	$dados["view"] = "produto/Index";
   	$this->load("template", $dados);
       
   } 

   public function novo(){
   	$dados["view"] = "produto/Create";
   	$this->load("template", $dados);
   }

   public function edit ($id_produto){
   $produto = new Produto();
   
   $dados["produto"] = $produto->getProduto($id_produto);
   $dados["view"] = "produto/Edit";

   /*var_dump($dados);
   exit;*/

   $this->load("template", $dados);

	}

	public function delete($id_produto, $excluir=NULL){
		$produto = new Produto();

		if($excluir=="S"){
			$produto->excluir($id_produto);
		header("location:" . URL_BASE ."produto");
		exit;
		}

		$dados["produto"] = $produto->getProduto($id_produto);
		$dados["view"] = "produto/Delete";
		$this->load("template", $dados);
	}


   public function salvar(){
   	$produto = new Produto();
   	
   	$nome   	= isset ($_POST["nome"]) ? strip_tags(filter_input(INPUT_POST,"nome" )) : NULL;
   	$valor   		= isset ($_POST["int"]) ? strip_tags(filter_input(INPUT_POST,"valor" )) : NULL;
   	
/*
 echo $nome . "/". $cpf ."/" . $email . "/" . $data_nascimento . "/" . $endereco . "/" . $cep ;
  exit();*/

  		if($id_produto){
   			$produto->editar($id_produto,$nome, $valor);
   		}else{

   			$produto->inserir($nome, $valor);
   		}

   	/*	echo $nome . "/". $cpf ."/" . $email . "/" . $telefone . "/" . $endereco . "/" . $cep ;
  exit();*/

   	/*	echo "<prev>";
   	      print_r($cliente);
        exit; */
        
   		header("location:" . URL_BASE ."produto");
   }
}
