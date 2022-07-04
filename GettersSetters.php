<?php

class Humano2
{
    private $idade = 0;

    public function setIdade($valor)
    {
        if (is_numeric($valor)) {
            $this->idade = $valor;
            print 'Idade alterada para: ';
        } else {
            print 'Não houve alteração: ';
        }
    }

    public function getIdade()
    {
        return $this->idade;
    }
}

$me = new Humano2();
$me->setIdade(31);
print $me->getIdade();
