<?php

/**No PHP 7, para alterar o valor de $c é preciso
 * declarar os valores pré definidos também no argumento
 * da chamada da função para poder chegar no valor de $c
 * e fazer a alteração
 * No exemplo abaixo, foi preciso declarar o valor de $b
 * novamente, neste caso o '10', e reescrever o novo valor
 * de $c que será '300'
 */

function adicionar($a, $b = 10, $c = 20)
{
    print $a + $b + $c;
}
adicionar(100, 10, 300);

echo PHP_EOL; // Quebra de linha no terminal

# abaixo, duas maneiras de alterar o valor de $c com Named Arguments
adicionar(c: 1000, a: 0);

echo PHP_EOL; // Quebra de linha no terminal

# Neste exemplo, o valor de $b foi mantido. 
adicionar(500, c: 1000);
