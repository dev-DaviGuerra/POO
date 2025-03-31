<?php

class Calculadora {

    //Definir uma constante para PI
    private const PI = 3.14;

    //Métodos estáticos
    public static function areaCirculo(float $raio) {
        return self::PI * $raio * $raio;

    //$this-> se refere a instancia da classe(objeto)
    //self:: se refere a classe em si(calculadora)
    }
}

$area = Calculadora::areaCirculo(10);
echo $area;