<?php 
  require_once 'conexao.class.php';
  require_once 'funcoes.class.php';

  class Funcionario {

  	private $con;
    private $objfunc;
    private $idFuncionario;
    private $nome;
    private $email;
    private $senha;
    private $dataCadastro;

    public function __construct() {
    	$this->con = new Conexao();
    	$this->objfunc = new Funcoes();
    }


    public function __set($atributo, $valor) {
         $this->atributo = $valor;
    }

    public function __get($atributo) {

    	return $this->atributo;

    }

    public function querySeleciona($dado) {
    	try {



    	}catch(PDOException $e) {

    	}
    }

    public function querySelect() {
    	try {

    	}catch(PDOException $e) {

    	}
    }

    public  function queryInsert($dado) {
    	try{

    	} catch(PDOException $e) {

    	}
    }

     public function queryUpdate($dado) {
    	try {

    	}catch(PDOException $e) {

    	}
    }

    public function queryDelete($dado) {
    	try {

    	}catch(PDOException $e) {

    	}
    }

}
?>
