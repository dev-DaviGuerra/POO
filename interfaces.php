<?php

interface MetodoPagamento
{
    public function pagar(float $valor): bool;

}

class Paypal implements MetodoPagamento
{
    public function pagar(float $valor):bool
    {
        echo 'Pagamento via Paypal no valor de R$'. $valor.'<br>';
        return true;
    }
}

class CreditCard implements MetodoPagamento
{
    public function pagar(float $valor):bool
    {
        echo 'Pagamento via cartão de crédito no valor de R$'. $valor. '<br>';
        return true;
    }
}

class Pix implements MetodoPagamento
{
    private function gerarQrCode(float $valor): string{
        echo 'Gerando QR Code para pagamento via Pix no valor de R$'.$valor.'<br>';
        return 'QRCODE';
    }
    public function pagar(float $valor): bool
    {
        $qrCode = $this->gerarQrCode($valor);
        echo 'Pagamento via Pix no valor de R$'.$valor.'<br>';
        echo 'QR Code: '.$qrCode.'<br>';
        return true;
    }
}

$pagamento = new Pix();
if($pagamento->pagar(100) === true)
{
    echo 'Liberando o produto... <br>';
} else{
    echo 'Rejeitado. <br>';
}
//Nosso siestema usando Interface

//Eu quero...

//1. Criar uma instancia de pagamento
//2. Usuário escolhe o método de pagamento
//3. O sistema vai chamar o método pagar daquele método de pagamento
