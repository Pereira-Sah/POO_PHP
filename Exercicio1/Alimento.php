<?php
include_once 'Produto.php';
class Alimento extends Produto{
    private $tipoAlimento; 
    public function getTipoDeAlimento(){
        return $this->tipoAlimento;
    }
    public function setIipoDeAlimento($tipoAlimento){
        $this->tipoAlimento = $tipoAlimento;
    }
    public function __construct($nome, $preco, $quantidade, $tipoAlimento){
        parent::__construct($nome, $preco, $quantidade);
        $this->tipoAlimento = $tipoAlimento;
    }
    public function getCategoria(){
        return "Alimento";
    }
}
?>