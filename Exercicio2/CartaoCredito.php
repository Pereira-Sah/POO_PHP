<?php
include_once 'PagamentoSistema.php';
use PagamentoSistema\Pagamento;
class CartaoCredito implements Pagamento{
    private $nomeCliente;
    public function getNome(){
        return $this->nomeCliente; 
    }
    public function setNome($nomeCliente){
        $this->nomeCliente = $nomeCliente;
    }
    public function __construct($nomeCliente){
        $this->nomeCliente = $nomeCliente;
    }
    public function processarPagamento($valor){
        return "Olá ". $this->nomeCliente . "! Seu pagamento de R$ " . $valor . " via Cartão de Crédito foi processado com sucesso!"; 
    }
   
    
}
?>