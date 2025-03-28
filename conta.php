<?php

class Conta{
    //Não é possível depositar mais de 100 reais
    //Não é possível sacar mais que o valor do saldo


    //Atributos
    private int $saldo;

    //Métodos
    public function __construct(int $saldo)
    {
        $this->saldo = $saldo;
    }

    public function sacar(int $valor)
    {
        if($valor > $this->saldo)
        {
            echo 'Você não tem saldo suficiente <br>';
            return false;
        }else{
        echo 'Você sacou: '.$valor.'<br>';
        $this->saldo -= $valor;
        }
    }

    public function depositar(int $valor)
    {
        if($valor > 100)
        {
            echo 'Você não pode depositar mais de 100 reais <br>';
            return false;
        } else{
            echo 'Você depositou: '.$valor. '<br>';
            $this->saldo += $valor;
        }
    }
    public function verSaldo() {
        return $this->saldo;
    }
}

$conta1 = new Conta(500);
echo 'Saldo Inicial: '.$conta1->verSaldo(). '<br>';

$conta1->depositar(100);
echo $conta1->verSaldo(). '<br>';