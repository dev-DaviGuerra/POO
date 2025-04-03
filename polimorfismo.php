<?php

abstract class Animal
{
    protected $idade = 30;
    abstract public function emitirSom();

    public function mover()
    {
        echo 'Movendo...<br>';
    }

}

class Cachorro extends Animal
{
    public $nome = 'Cachorro';
    public function emitirSom()
    {
        return 'Au Au <br>';
    }
}


class FilaBrasileiro extends Cachorro
{
    public $nome = 'Fila Brasileiro ';
    public $meses = 3;


    public function getIdade()
    {
        return $this->idade;
    }


    public function emitirSom()
    {
        if($this->meses < 6)
        {
        return parent::emitirSom();
        }else{
        return 'Ruf Ruf';
        }
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

/*
$cachorro = new Cachorro();
$gato = new Gato();
$peixe = new Peixe();


$animais = array($cachorro, $gato, $peixe);

foreach ($animais as $animal)
{
    fazerOAnimalEmitirSom($animal);
}
*/

$fila = new FilaBrasileiro();
$fila->mover();
echo $fila->getIdade();
fazerOAnimalEmitirSom($fila);