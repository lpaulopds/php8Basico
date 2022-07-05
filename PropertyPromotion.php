<?php

class Human1
{
    public $nome;
    public $sobrenome;

    function __construct($n, $s)
    {
        $this->nome = $n;
        $this->sobrenome = $s;
    }
}

# No PHP 8, as classes podem ser escritas da seguinte maneira
class Human2
{
    function __construct(public $nome, public $sobrenome)
    {
        $this->nome = $nome;
        $this->sobrenome = $sobrenome;
    }
}

$worker = new Human1('NameOne', 'LastNameOne');
$worker2 = new Human2('NameTwo', 'LastNameTwo');

print $worker->nome . ' ' . $worker->sobrenome;
echo PHP_EOL; // Quebra de linha no terminal
print $worker2->nome . ' ' . $worker2->sobrenome;
