<?php

class Conexao {
    //Atributos
    private string $conexao;

    //Métodos
    public function __construct()
    {
        //Conectar-se ao banco de dados

        $this->conexao = 'Conectado com o banco de dados';
        echo 'Conexão com o banco de dados criada <br>';

    }

    public function __destruct()
    {
        $this->conexao = '';
        echo 'Conexão encerrada com o banco de dados <br>';
    }

    public function query()
    {
        echo 'Realizada consulta no banco de dados <br>';
    }

}

$conexao = new Conexao();
$conexao->query();