<?php

$falar = function($mensagem)
{
    print 'A mensagem é: ' . $mensagem;
};

function myFunction(callable $funcao, $dados)
{
    $funcao($dados);
}

myFunction($falar, 'Esta é a minha mensagem');

// ----- //

function funcao(): array
{
    return [1, 2, 3];
}

# esta função gera um erro
// function funcao2(): string
// {
//     return [1, 2, 3];
// }

