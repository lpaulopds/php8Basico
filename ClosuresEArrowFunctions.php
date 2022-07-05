<?php

/**Função Closure
 * São funções anônimas que podem usar variáveis do escopo global
 */
$x = 20;
$y = 30;

$closure = function ($z) use ($x, $y) {
    print "$z - $x - $y";

    # o valor de $y não é alterado
    // $y += 1000;
};
$closure(10);

# o valor de $y não é alterado
// print "<p>$y</p>";
echo PHP_EOL; // Quebra de linha no terminal

/**Arrow Function 
 * É uma função anônima escrita com menos códigos
 * Foi introduzido no PHP 7.4
 * Tem as mesmas características de uma função CLOSURE
 * com a diferença que capturam automaticamente as variáveis globais
 * Usa a palavra reservada 'fn' e não precisa de return nem de chaves/chavetas
 */

$x = 20;
$y = 30;

$funcao = fn ($z) => "$x - $y - $z";
print $funcao(10);
