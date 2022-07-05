<?php

/**A expressão condicional 'match' é semelhante ao 'switch'
 * só que com menos escrita e mais parecido com um array
 * Podendo usar apenas uma expressão para cada condição
 * 
 * IMPORTANTE:
 * No Switch, as comparações são feitas por valor '=='
 * No Match, as comparações são feitas por valor e tipo '==='
 */

$x = 10;
print match ($x) {
    5 => 'parou no 5',
    10 => 'parou no 10',
    15 => 'parou no 15',
    default => 'número diferente de 5, 10, 15'
};

echo PHP_EOL; // Quebra de linha no terminal

# é possível executar a mesma operação para vários tipos de condições
$x = 5;
$opcao = print match ($x) {
    2 => 'é 2',
    4, 5, 6 => 'entre 4 e 6',
    default => 'outro valor'
};

echo PHP_EOL; // Quebra de linha no terminal

# no Switch a comparação é por valor
$x = '1';

switch ($x) {
    case 1:
        print 'inteiro';
        break;
    case '1':
        print 'string';
}

echo PHP_EOL; // Quebra de linha no terminal

# no Match a comparação é por valor e tipo
print match ($x) {
    1 => 'inteiro',
    '1' => 'string'
};
