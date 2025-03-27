<?php

class Conta{

    //Atributos
    private int $saldo;

    //Métodos
    public function __construct(int $saldo)
    {
        $this->saldo = $saldo;
    }

    public function sacar(int $valor)
    {
        echo 'Você sacou: '.$valor.'<br>';
        $this->saldo -= $valor;
    }

    public function depositar(int $valor)
    {
        echo 'Você depositou: '.$valor. '<br>';
        $this->saldo += $valor;
    }
    public function verSaldo() {
        return $this->saldo;
    }
}

$conta1 = new Conta(500);
echo 'Saldo Inicial: '.$conta1->verSaldo(). '<br>';

$conta1->depositar(100);
echo $conta1->verSaldo(). '<br>';