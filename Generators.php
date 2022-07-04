<?php

/**Generators
 * É uma função que permite gerar séries de valores
 * Os valores são devolvidos através da função yield
 * Diferente do return, a instrução yield guarda o estado da função
 * permitindo que a função continue a partir do estado onde ficou na última chamada
 * Obs.:
 * Funções geradoras podem aumentar a performance dos scripts
 */

function search_number()
{
    for ($i = 0; $i < 10; $i++) {
        yield $i;
    }
}

# a função geradora funciona como um iterador, que pode ser usada num ciclo
# até que não tenha mais valores retornado no yield
foreach (search_number() as $number) {
    print $number . PHP_EOL;
}

# apartir do PHP 7, generators podem retornar valores de outro gerador ou devolver valores de um array
function search_names()
{
    yield 'Maria';
    yield 'João';
    yield from ['John', 'Joana', 'Jota'];
    yield 'Manuel';
}

foreach (search_names() as $name) {
    print $name . PHP_EOL;
}
