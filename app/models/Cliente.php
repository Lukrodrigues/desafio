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

    public function inserir($nome, $email, $telefone, $endereco, $cpf, $cep){
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
}
