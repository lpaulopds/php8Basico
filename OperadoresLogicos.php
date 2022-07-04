<?php

/**Operadores Lógicos 
 * Eles permitem verificar várias comparações e retornar TRUE ou FALSE
 * 
 * && = AND
 * || = OR
 * 
 * Com o operador && 'AND', se a operação contiver valores verdadeiros e falsos, o retorno será 'false'.
 * 'true' e 'true' será 'true'
 * 'false' e 'false' será 'false'
 * 
 * Com o operador || 'OR', se a operação contiver valores verdadeiros e falsos, o retorno será 'true'
 * 'true' e 'true' será 'true'
 * 'false' e 'false' será 'false'    
 */

$a = 100;
$b = 200;

print $x = ($a < $b) && ($a < 1000); # true
echo PHP_EOL; // Quebra de linha no terminal

print $x = ($a > $b) || ($a > 1000); # false
echo PHP_EOL; // Quebra de linha no terminal

print $x = ($a < 150) && ($b > 300); # false
echo PHP_EOL; // Quebra de linha no terminal

print $x = ($a > 10) || ($b > 500); # true
echo PHP_EOL; // Quebra de linha no terminal

print $x = ($a == 100) && ($b < $a); # false
