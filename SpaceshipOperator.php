<?php

/**Spaceship Operator '<=>' é um operador de comparação que foi adicionado a partir do PHP 7.
 * Ele retorna apenas três valores:
 * 0, 1 ou -1
 */

# se o valor da esquerda for igual ao da direita
print $x = 1 <=> 1; // Retorna '0'
echo PHP_EOL; // Quebra de linha no terminal

# se o valor da esquerda for maior que o da direita
print $x = 3 <=> 2; // Retorna '1'
echo PHP_EOL; // Quebra de linha no terminal

# se o valir da esquerda for menor que o da direita
print $x = 2 <=> 3; // Retorna '-1'
