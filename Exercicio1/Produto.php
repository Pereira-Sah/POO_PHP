<?php
abstract class  Produto{
    private $nome;
    private $preco;
    private $quantidade;
    private static $totalProduto = 0;

    public function getNome(){
        return $this->nome;
    }

    public function setNome($nome){
        return $this->nome = $nome;
    }
    public function getPreco(){
        return $this->preco;
    }

    public function setPreco($preco){
        return $this->preco = $preco;
    }
    public function getQuantidade(){
        return $this->quantidade;
    }

    public function setQuantidade($quantidade){
        return $this->quantidade = $quantidade;
    }

    public static function getTotalProduto(){
        return self::$totalProduto;
    }
    public function __construct($nome, $preco, $quantidade){
        $this->nome = $nome;
        $this->preco = $preco;
        $this->quantidade = $quantidade;
        self::$totalProduto += 1;
    }
    abstract public function getCategoria();
}
?>