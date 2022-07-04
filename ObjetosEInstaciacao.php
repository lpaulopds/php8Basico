<?php

class Human
{
    public $name = 'Maria';
    public $nickname = 'João';

    public function signature()
    {
        return $this->name . ' ' . $this->nickname;
    }
}

$man = new Human();
print $man->signature();

echo PHP_EOL; // Quebra de linha no terminal

/**Aula 44
 * Construct
 * É sempre executado na instaciação do objeto
 * Ele é definido com o método mágico '__construct'
 */

class Human2
{
    private $name;
    private $nickname;

    function __construct($no, $ni)
    {
        $this->name = $no;
        $this->nickname = $ni;
    }

    public function nomeCompleto()
    {
        return $this->name . ' ' . $this->nickname;
    }
}

$worker = new Human2('nome', 'apelido');
$worker2 = new Human2('nomeDois', 'apelidoDois');

print $worker->nomeCompleto();
echo PHP_EOL; // Quebra de linha no terminal
print $worker2->nomeCompleto();
