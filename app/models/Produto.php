<?php

namespace app\models;
use app\core\Model;

class Produto extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function lista(){
        $sql = "SELECT * FROM  produto ";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getProduto($id_produto){
    	$resultado = array();
    	$sql = "SELECT * FROM produto WHERE id_produto = :id_produto";
    	$qry = $this->db->prepare($sql);
    	$qry->bindValue(":id_produto", $id_produto);
    	$qry->execute();

    	if($qry->rowCount()> 0){
    		$resultado = $qry->fetch(\PDO::FETCH_OBJ);

    		return $resultado;
    	}

    }

    public function inserir($nome, $valor){
    	$sql = "INSERT INTO produto SET nome =:nome, valor =:valor";

    	$qry = $this->db->prepare($sql);

    	$qry->bindValue(":nome", $nome);
    	$qry->bindValue(":valor", $valor);
    

    	$qry->execute();

    /*	echo "<prev>";
   	      print_r($sql);
        exit;*/

    	return $this->db->lastInsertId();
    }

    public function editar($id_produto, $nome, $valor){
    	$sql = "UPDATE produto SET nome =:nome, valor =:valor WHERE id_valor = :id_valor";

    	$qry = $this->db->prepare($sql);

    	
    	$qry->bindValue(":nome", $nome);
    	$qry->bindValue(":valor", $valor);
    	
    	
    	

    	$qry->execute();

    /*	echo "<prev>";
   	      print_r($sql);
        exit;*/
    }

    public function excluir($id_cliente){
    	$sql = "DELETE FROM  valor WHERE id_valor = :id_valor";

    	$qry = $this->db->prepare($sql);
    	$qry->bindValue(":id_valor", $id_valor);
    	$qry->execute();

    }

}
