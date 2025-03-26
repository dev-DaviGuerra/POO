<?php
class Carro{
    //atributos

    public string $cor;
    public int $ano;
    public string $modelo;

    //métodos

    public function __construct(string $cor, int $ano, string $modelo)
    {
        $this->cor = $cor;
        $this->ano = $ano;
        $this->modelo = $modelo;

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



