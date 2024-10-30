<?php 
include_once "Produto.php";

class Eletronico extends Produto{
    private $marca;
    public function getMarca(){
        return $this->marca;
    }
    public function setMarca($marca){
        $this->marca = $marca;
    }
    public function __construct($nome, $preco, $quantidade, $marca){
        parent::__construct($nome, $preco, $quantidade);
        $this->marca = $marca; 
    }
    public function getCategoria(){
        return "Eletronico";
    }
}
?>