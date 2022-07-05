<?php

/**For
 * Executa um bloco de código determinado número de vezes 
 * Os 3 parâmetros são:
 * 1º o iniciador indica o valor inicial do contador
 * 2º a condição que indica quando terminar o ciclo
 * 3º o incremento que altera o valor do contador a cada ciclo
 */

for ($x = 1; $x <= 10; $x++) {
    print $x;
}
echo PHP_EOL; // Quebra de linha no terminal

# também pode ter uma assinatura diferente com os parâmetros fora da assinatura do laço
$i = 1;
for (; $i < 10;) {
    print $i++;
}
echo PHP_EOL; // Quebra de linha no terminal

# o primeiro e último parâmetro pode conter várias condições separadas por vírgulas
for ($contador = 1, $x = 10; $contador < 10; $contador++, $x--) {
    print $x;
}
echo PHP_EOL; // Quebra de linha no terminal

# apresentando dados de um array
$nomes = ['Patricia', 'Renata', 'Manuel'];
for ($i = 0; $i < count($nomes); $i++) {
    print $nomes[$i] . PHP_EOL;
}
echo PHP_EOL; // Quebra de linha no terminal

# exemplo retirado do manual do PHP
$pessoas = array(
    array('nome' => 'Maria', 'salt' => 856412),
    array('nome' => 'João', 'salt' => 215863)
);

for ($i = 0, $tamanho = count($pessoas); $i < $tamanho; ++$i) {
    print $pessoas[$i]['nome'];
    print $pessoas[$i]['salt'];
}
