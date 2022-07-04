<?php

/** Funções do PHP para operar strings */

print $frase = 'Esta frase tem 29 caracteres.';
echo PHP_EOL; // Quebra de linha no terminal

# retorna o número de caracteres da string
print $total_de_caracteres = strlen($frase);
echo PHP_EOL; // Quebra de linha no terminal

# retorna as letras a partir da posição 0 até 4 caracter
print $primeira_palavra = substr($frase, 0, 5);
echo PHP_EOL; // Quebra de linha no terminal

# todas letra maiúsculas
print $todas_maiusculas = strtoupper($frase);
echo PHP_EOL; // Quebra de linha no terminal

# todas as letras minúsculas
print $todas_maiusculas = strtolower($frase);
echo PHP_EOL; // Quebra de linha no terminal

# substitui uma letra por outra
print $nova_frase = str_replace('a', 'x', $frase);
echo PHP_EOL; // Quebra de linha no terminal

# verifica qual posição do caracter
print $posicao = strpos($frase, 'a');
echo PHP_EOL; // Quebra de linha no terminal

$nome = 'James';
$apelido = 'Magalhães';
$nome_completo = "$nome $apelido";

print $nome_completo;
echo PHP_EOL; // Quebra de linha no terminal

# a função strlen conta silabas com acentos como 2 caracteres
print strlen($nome_completo);
echo PHP_EOL; // Quebra de linha no terminal

# utilize a função mb_strlen para contar silabas com acentos como 1 caracter
print mb_strlen($nome_completo);
