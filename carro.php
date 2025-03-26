<?php
class Carro{
    //atributos

    public string $cor;
    public int $ano;
    public string $modelo;

    //métodos

    public function acelerar(){
        echo 'Acelerando...';
    }

    public function freiar() {
        echo 'freiando';
    }
}

$carro1 = new Carro;
$carro1->cor = 'Azul';
$carro1->ano = '2025';
$carro1->modelo = 'DVD';

$carro2 = new Carro;
$carro2->cor = 'Preto';
$carro2->ano = '2024';
$carro2->modelo = 'YSM';

echo 'Carro 1: <br>';
$carro1->acelerar();
$carro1->freiar();

echo 'Carrp 2: <br>';
$carro2->acelerar();
$carro2->freiar();

