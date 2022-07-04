<?php

$meu_boleano = true;

# retorna uma string vazia
// print $meu_boleano;
print (int)$meu_boleano;
echo PHP_EOL; // Quebra de linha no terminal

$nomes = ['João', 'Maria', 'Gilberto'];

# converte array em um objeto
$nomes1 = (object)$nomes;
print_r($nomes1);

# converte uma variável em um array
$nome = 'João';
$os_nomes = (array)$nome;
print_r($os_nomes);
