<?php

function processarPagamento(MetodoPagamento $formaDePagamento, float $valorPagamento)
{
    echo 'Processando pagamento via '. $formaDePagamento->getName() . 'com valor de R$'. $valorPagamento;
    if($formaDePagamento->pagar($valorPagamento))
    {
        echo '<br>Pagamento realizado com sucesso';
    }else{
        echo '<br>Pagamento não realizado';
    }
}