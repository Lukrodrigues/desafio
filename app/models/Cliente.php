<?php

namespace app\models;
use app\core\Model;

class Cliente extends Model{
    public function __construct() {
        parent::__construct();
    }
    
    public function lista(){
        $sql = "SELECT * FROM  cliente ";
        $qry = $this->db->query($sql);
        
        return $qry->fetchAll(\PDO::FETCH_OBJ);
    }

    public function getCliente($id_cliente){
    	$resultado = array();
    	$sql = "SELECT * FROM cliente WHERE id_cliente = :id_cliente";
    	$qry = $this->db->prepare($sql);
    	$qry->bindValue(":id_cliente", $id_cliente);
    	$qry->execute();

    	if($qry->rowCount()> 0){
    		$resultado = $qry->fetch(\PDO::FETCH_OBJ);

    		return $resultado;
    	}

    }

    public function inserir($nome, $cpf, $email, $telefone, $endereco, $cep){
    	$sql = "INSERT INTO cliente SET nome =:nome, cpf =:cpf, email =:email, telefone =:telefone, endereco =:endereco, cep =:cep";

    	$qry = $this->db->prepare($sql);

    	$qry->bindValue(":nome", $nome);
    	$qry->bindValue(":cpf", $cpf);
    	$qry->bindValue(":email", $email);
    	$qry->bindValue(":telefone", $telefone);
    	$qry->bindValue(":endereco", $endereco);
    	$qry->bindValue(":cep", $cep);

    	$qry->execute();

    /*	echo "<prev>";
   	      print_r($sql);
        exit;*/

    	return $this->db->lastInsertId();
    }

    public function editar($id_cliente, $nome, $cpf, $email, $telefone, $endereco, $cep){
    	$sql = "UPDATE cliente SET nome =:nome, cpf =:cpf, email =:email, telefone =:telefone, endereco =:endereco, cep =:cep WHERE id_cliente = :id_cliente";

    	$qry = $this->db->prepare($sql);

    	
    	$qry->bindValue(":nome", $nome);
    	$qry->bindValue(":cpf", $cpf);
    	$qry->bindValue(":email", $email);
    	$qry->bindValue(":telefone", $telefone);
    	$qry->bindValue(":endereco", $endereco);
    	$qry->bindValue(":cep", $cep);
    	$qry->bindValue(":id_cliente", $id_cliente);
    	

    	$qry->execute();

    /*	echo "<prev>";
   	      print_r($sql);
        exit;*/
    }

    public function excluir($id_cliente){
    	$sql = "DELETE FROM  cliente WHERE id_cliente = :id_cliente";

    	$qry = $this->db->prepare($sql);
    	$qry->bindValue(":id_cliente", $id_cliente);
    	$qry->execute();

    }

}
