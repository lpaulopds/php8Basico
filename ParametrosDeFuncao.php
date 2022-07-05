<?php

/**Os parâmetros de função permitem passar valores para
 * o interior da função quando ela é chamada
 * Parâmetros são separados por vírgula
 * Obs.: Parâmetros são os nomes das variáveis,
 * argumentos são os dados passados quando a função é chamada
 */

# por ter dois parâmetros declarados a função irá executar 2 vezes com os respectivos valores atribuidos
adicionar(10, 20);
adicionar(100, 200);

function adicionar($a, $b)
{
    print "$a + $b = " . ($a + $b) . PHP_EOL;
}

// ----- //

$nomes = ['Maria', 'João', 'José'];
foreach ($nomes as $nome) {
    saudacao($nome);
}

function saudacao($valor)
{
    print "Bom dia, $valor" . PHP_EOL;
}

/**Aula 34
 * Parâmetros opcionais
 * Os parâmetros de uma função podem conter valores pré definidos,
 * exemplo: '$b = 2',
 * podendo ser alterado ou não no argumento da função
 * Obs.: No PHP 8, o parâmetro pré definido tem ser declarado após
 * os parâmetros que não são pré definidos
 */

function multiplicar($a, $b = 2)
{
    print $a * $b;
}

# se o valor não for alterado no argumento, $b continuará = 2
multiplicar(10);
echo PHP_EOL; // quebra de linha no terminal
# aqui o valor foi alterado no argumento, assumindo um novo resultado
multiplicar(10, 20);
