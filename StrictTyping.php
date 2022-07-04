<?php

/**O PHP sempre tentará converter os tipos de dados declarados 
 * Com o declare strict_types=1 no inicio de script só será
 * possível utilizar os tipos declarados sem a tentativa de
 * conversão da própria linguagem de programação
 */

declare(strict_types=1);

function falar(string $mensagem)
{
    print $mensagem;
}

falar('Olá Mundo');
echo PHP_EOL; // Quebra de linha no terminal

# gera um erro
// falar(2500);
echo PHP_EOL; // Quebra de linha no terminal

function somar(int $v1, int $v2)
{
    return $v1 + $v2;
}

print somar(10, 20);

# gera um erro
// print somar('a', 'b');
echo PHP_EOL; // Quebra de linha no terminal

// ----- //

# também é possível declarar valores nulo. Com o prefixo '?'
function dizer(?string $mensagem)
{
    print $mensagem;
}

dizer('Diga esta mensagem');
dizer(null);
echo PHP_EOL; // Quebra de linha no terminal

# declaração de métodos com mais de um tipo. Separado por '|'
function conversar(int|string $mensagem)
{
    print $mensagem;
}

conversar('Olá, tudo bem?');
echo PHP_EOL; // Quebra de linha no terminal
conversar(1000000);
echo PHP_EOL; // Quebra de linha no terminal

// ----- //

# tipos de retorno. A função só poderá receber retorno com um inteiro ou float
function calculaQuadrado(int | float $v1): int | float
{
    return $v1 * $v1;
}

print calculaQuadrado(10);
echo PHP_EOL; // Quebra de linha no terminal
print calculaQuadrado(10.2);

# gera um erro se tentar retornar uma string
// print calculaQuadrado('João');
