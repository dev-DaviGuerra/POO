<?php

class Conta{
    //Não é possível depositar mais de 100 reais
    //Não é possível sacar mais que o valor do saldo
    //Cheque especial(Negativo ate 100 reais)

    //Atributos
    private int $saldo;
    private bool $chequeEspecial;

    //Métodos
    public function __construct(int $saldo, bool $chequeEspecial = false)
    {
        $this->saldo = $saldo;
        $this->chequeEspecial = $chequeEspecial;
    }

    public function sacar(int $valor)
    {
        if($valor > $this->saldo && $this->chequeEspecial == false)
        {
            echo 'Você não tem saldo suficiente <br>';
            return false;
        }
        
        if($valor > $this->saldo + 100 && $this->chequeEspecial == true ){
            echo 'Você não pode sacar mais que o saldo + cheque especial (100) <br>';
            return false;
        }
        
        echo 'Você sacou: '.$valor.'<br>';
        $this->saldo -= $valor;
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

$conta1->depositar(111);
$conta1->sacar(600);
echo $conta1->verSaldo(). '<br>';

'<hr>';

$conta2 = new Conta(500, true);
echo 'Saldo Inicial: '.$conta2->verSaldo(). '<br>';

$conta2->depositar(111);
$conta2->sacar(600);
echo $conta2->verSaldo(). '<br>';

