<?php

class Humano
{
    private $nome = 'x';

    function setPrivate($objeto, $valor)
    {
        $objeto->nome = $valor;
    }

    function apresentar()
    {
        print $this->nome;
    }
}

$a = new Humano();
$b = new Humano();

$a->apresentar();
$a->setPrivate($b, 'João');
echo PHP_EOL; // Quebra de linha no terminal

$b->apresentar();
