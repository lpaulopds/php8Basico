<?php

$x = null;
$nome = $x ?? 'sem nome';
# o exemplo acima é semelhante a este
$nome1 = isset($x) ? $x : 'sem nome';

$apelido = null;
# se apelido estiver com valor igual a 'null' é atribuido o valor 'apelido desconhecido'
# caso a variável apelido estivesse com um valor válido, a atribuição 'apelido desconhecido' seria ignorada
$apelido ??= 'apelido desconhecido';

print $nome;
echo PHP_EOL; // Quebra de linha no terminal
print $apelido;
