<?php

//ENCAPSULAMENTOS
//GETTERS E SETTERS
class Produto {
    //Atributos

    private string $nome;
    private float $preço;

    //Métodos
    
    public function __construct(string $nome, float $preço)
    {
        $this->nome = $nome;
        $this->preço = $preço;
    }
    //GETTER
    public function getPreço()
    {
        //GET = LEITURA
        return $this->preço;
    }
    //SETTER
    public function setPreço(float $preço)
    {
        //SET = ESCRITA/ALTERAR
        $this->preço = $preço;
    }
}

$produto1 = new Produto('Cadeira', 500.00);
