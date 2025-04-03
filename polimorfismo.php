<?php

abstract class Animal
{

    abstract public function emitirSom();
}

class Cachorro extends Animal
{
    public $nome = 'Cachorro';
    public function emitirSom()
    {
        return 'Au Au <br>';
    }
}

class Gato extends Animal
{
    public $nome = 'Gato';
    public function emitirSom()
    {
        return 'Miau <br>';
    }
}

class Peixe extends Animal
{
    public $nome = 'Peixe';
    public function emitirSom()
    {
        return null;
    }
}


function fazerOAnimalEmitirSom($animal)
{
    echo 'O animal: '.$animal->nome.' emite: '.$animal->emitirSom();
}

$cachorro = new Cachorro();
$gato = new Gato();
$peixe = new Peixe();


$animais = array($cachorro, $gato, $peixe);

foreach ($animais as $animal)
{
    fazerOAnimalEmitirSom($animal);
}