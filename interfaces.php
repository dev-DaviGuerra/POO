<?php


class Paypal
{
    public function pagar($valor)
    {
        echo 'Pagamento via Paypal no valor de '. $valor.'<br>';
        return true;
    }
}

class CreditCard
{
    public function pagar($valor)
    {
        echo 'Pagamento via cartão de crédito no valor de '. $valor. '<br>';
        return 'sucesso';
    }
}

$pagamento = new Paypal();
$pagamento->pagar(100);
//Nosso siestema usando Interface

//Eu quero...

//1. Criar uma instancia de pagamento
//2. Usuário escolhe o método de pagamento
//3. O sistema vai chamar o método pagar daquele método de pagamento
