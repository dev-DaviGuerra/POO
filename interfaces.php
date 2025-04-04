<?php

include('functions.php');
interface MetodoPagamento
{
    public function getName():string;
    public function pagar(float $valor): bool;

}

class Paypal implements MetodoPagamento
{
    public function getName(): string
    {
        return 'Paypal';
    }

    public function pagar(float $valor):bool
    {
        echo '<br>Pagamento via Paypal no valor de R$'. $valor.'<br>';
        return true;
    }
}

class CreditCard implements MetodoPagamento
{
    public function getName(): string
    {
        return 'Cartão de crédito';
    }

    public function pagar(float $valor):bool
    {
        echo '<br>Pagamento via cartão de crédito no valor de R$'. $valor. '<br>';
        return true;
    }
}

class Pix implements MetodoPagamento
{
    public function getName(): string
    {
        return 'Pix';
    }

    private function gerarQrCode(float $valor): string{
        echo '<br>Gerando QR Code para pagamento via Pix no valor de R$'.$valor.'<br>';
        return 'QRCODE';
    }

    public function pagar(float $valor): bool
    {
        $qrCode = $this->gerarQrCode($valor);
        echo '<br>Pagamento via Pix no valor de R$'.$valor.'<br>';
        echo 'QR Code: '.$qrCode.'<br>';
        return true;
    }
}

$metodoPagamentoSelecionadoPeloUsuario = new CreditCard();
$valorDoPagamentoDoUsuario = 100;


//imutável
processarPagamento($metodoPagamentoSelecionadoPeloUsuario, $valorDoPagamentoDoUsuario);