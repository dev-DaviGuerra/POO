<?php
class Carro{
    //atributos

    //métodos

    public function __construct(public string $cor, public int $ano, public string $modelo)
    {
        echo 'Construindo carro '.$this->modelo.'... <br>';
    }

    public function acelerar(){
        echo 'Acelerando...';
    }

    public function freiar()
    {
        echo 'freiando';
    }
}

$carro1 = new Carro('Azul', 2025, 'DVD');


$carro2 = new Carro('Preto', 2023, 'YSM');



