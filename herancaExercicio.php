<?php

class Animal
{
    public function respirar()
    {
        echo 'Respirando...<br>';
    }
    public function mover()
    {
        echo 'Movimentando...<br>';
    }
}

class Mamífero extends Animal
{
    public function amamentar()
    {
        echo 'Amamentando...<br>';
    }
}

class Ave extends Animal
{
    public function botarOvos()
    {
        echo 'Botando Ovos...<br>';
    }

    public function voar()
    {
        echo 'Voando...<br>';
    }
}

class Cachorro extends Mamífero
{
    public function abanarRabo()
    {
        echo 'Abanando o rabo...<br>';
    }

    public function latir()
    {
        echo 'Au au...<br>';
    }
}

class Gato extends Mamífero
{
    public function abanarRabo()
    {
        echo 'Abanando o rabo...<br>';
    }

    public function miando()
    {
        echo 'Miaau...<br>';
    }
}
    class Pombinho extends Ave
{

}

echo 'Cachorro: <br>';
$cachorro = new Cachorro();
$cachorro->abanarRabo();
$cachorro->latir();

$cachorro->respirar();
$cachorro->amamentar();
$cachorro->mover();
echo '<hr>';

echo 'Gato: <br>';
$gato = new Gato();
$gato->abanarRabo();
$gato->miando();

$gato->respirar();
$gato->amamentar();
$gato->mover();
echo '<hr>';

echo 'Pombinho: <br>';
$pombinho = new Pombinho();
$pombinho->botarOvos();
$pombinho->respirar();
$pombinho->mover();
$pombinho->voar();
echo '<hr>';