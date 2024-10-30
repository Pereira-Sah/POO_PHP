<?php
namespace PagamentoSistema;
interface Pagamento{
    public function processarPagamento($valor);
}
?>