<?php

class Operacoes
{
    static function aleatorio($min, $max)
    {
        return rand($min, $max);
    }

    static function formula($a, $b)
    {
        return ($a * 2) + ($b * $a);
    }

    static function gerarNome()
    {
        $nomes = ['João', 'Gilberto', 'Clara', 'Francisco', 'Nuno', 'Airton'];
        $sobrenome = ['Silva', 'Almeida', 'Santos', 'Rodrigues', 'Oliveira', 'Martins'];
        return $nomes[rand(0, count($nomes) - 1)] . ' ' . $sobrenome[rand(0, count($sobrenome) - 1)];
    }
}

print Operacoes::aleatorio(0, 1000);
echo PHP_EOL; // Quebra de linha no terminal
print Operacoes::formula(10, 20);
echo PHP_EOL; // Quebra de linha no terminal
print Operacoes::gerarNome();
