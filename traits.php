<?php

function autoloader($className) 
{
    $diretorios = ['classes/', 'traits/'];
    foreach($diretorios as $diretorios)
    {
        $diretorios = strtolower($diretorios);
        $className = strtolower($className);
        
        if(file_exists($diretorios . $className . '.class.php'))
        {
            include_once($diretorios . $className . '.class.php');
            break;
        }
    }
}

spl_autoload_register('autoloader');

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