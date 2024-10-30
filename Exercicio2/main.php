<?php
include_once 'CartaoCredito.php';
include_once 'Boleto.php';

    echo "<h3> Crédito</h3> <br>";
$pagamento_credito = new CartaoCredito("Clara");
    echo $pagamento_credito->processarPagamento(500.00);
    echo"<hr>";
    echo "<h3> Boleto</h3> <br>";
$pagamento_boleto = new Boleto("Jensen");
    echo $pagamento_boleto->processarPagamento(1000.00);

?>