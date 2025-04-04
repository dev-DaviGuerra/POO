<?php

trait Logger
{
    public function log($message)
    {
        echo '<br>[LOG]'.$message. '<br>';
        echo 'Datetime: '. date('Y-m-d'). '<br>';
    }
}
class User
{
    use Logger;

    public function createUser()
    {
        echo 'Usuário criado';
        $this->log('Usuário criado');
    }

    public function loginUser()
    {
        echo 'Usuário logado';
        $this->log('Usuário logado');
    }
}

class File
{
    use Logger; 

    public function created()
    {
        echo 'Arquivo criado';
        $this->log('Arquivo criado');
    }

    public function deleted()
    {
        echo 'Arquivo deletado';
        $this->log('Arquivo deletado');
    }
}

$user = new User();
$user->createUser();
$user->loginUser();

echo '<hr>';

$file = new File();
$file->created();
$file->deleted();