<?php

abstract class FormasGeometricas 
{
    abstract public function area();
}

class Quadrado extends FormasGeometricas
{
    public $lado;

    public function __construct($lado)
    {
        $this->lado = $lado;
    }
    public function area()
    {
        return $this->lado * $this->lado;
    }
}

class Retângulo extends FormasGeometricas
{
    public $base;
    public $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function area()
    {
        return $this->base * $this->altura;
    }
}

class Triângulo extends FormasGeometricas
{
    public $base;
    public $altura;

    public function __construct($base, $altura)
    {
        $this->base = $base;
        $this->altura = $altura;
    }
    public function area()
    {
        return $this->base * $this->altura / 2 ;
    }
}

$quadrado = new Quadrado(10);
$retangulo = new Retângulo(5, 10);
$triangulo = new Triângulo(3, 4);

echo 'A área do quadrado é '. $quadrado->area() . '<br>';
echo 'A área do retângulo é '. $retangulo->area() . '<br>';
echo 'A área do triângulo é '. $triangulo->area() . '<br>';
