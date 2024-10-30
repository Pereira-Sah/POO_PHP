<?php
include_once 'PagamentoSistema.php';
use PagamentoSistema\Pagamento;
class Boleto implements Pagamento{
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
        return "Olá ". $this->nomeCliente . "! Seu pagamento de R$ " . $valor . " via Boleto foi processado com sucesso!"; 
    }
   
    
}
?>
