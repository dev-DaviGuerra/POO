<?php

class Veiculo
{
    public $marca;
    public $modelo;

    public function mover(){
        echo 'Movendo...<br>';
    }
}

class Carro extends Veiculo
{
    public $qntPortas;

    function __construct($marca, $modelo, $qntPortas)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->qntPortas = $qntPortas;
    }

    public function abrirPortas()
    {
        echo 'Abrindo as '. $this->qntPortas . ' portas... <br>';
    }
}

class Moto extends Veiculo
{
    public $tipoGuidon;

    function __construct($marca, $modelo, $tipoGuidon)
    {
        $this->marca = $marca;
        $this->modelo = $modelo;
        $this->tipoGuidon = $tipoGuidon;
    }

    public function empinar()
    {
        echo 'Empinando a moto ... <br>';
    }
}

echo 'Carro: <br>';
$carro = new Carro('Ford', 'Mustang', 4);
$carro->mover();
$carro->abrirPortas();
$carro->mover();
echo '<hr>';

echo 'Moto: <br>';
$moto = new Moto('Honda', 'CBR1000', 'Esportivo');
$moto->mover();
$moto->empinar();
$moto->mover();