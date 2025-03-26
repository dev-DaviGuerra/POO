<?php
class Carro{
    //atributos e métodos

    public string $cor;
    public int $ano;
    public string $modelo;
}

$carro1 = new Carro;
$carro1->cor = 'Azul';
$carro1->ano = '2025';
$carro1->modelo = 'DVD';

$carro2 = new Carro;
$carro2->cor = 'Preto';
$carro2->ano = '2024';
$carro2->modelo = 'YSM';

print_r($carro1);
print_r($carro2);