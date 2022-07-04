<?php

trait MinhasHabilidades
{
    public function falar($mensagem)
    {
        print "Eu falo: $mensagem";
    }

    public function saltar($metros)
    {
        print "Eu salto: $metros metros";
    }
}

class Humano
{
    use MinhasHabilidades;
}

$h = new Humano;
$h->falar('Hello World');
echo PHP_EOL; // Quebra de linha no terminal
$h->saltar(3);
