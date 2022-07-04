<?php

# Interrompe o loop com a condição do if
for ($i = 0; $i < 20; $i++) {
    print $i . PHP_EOL;
    if ($i == 10) {
        break;
    }
}

# Interrompe o loop quando encontra a string 'Maria'
$nomes = ['João', 'Maria', 'José'];
foreach ($nomes as $nome) {
    print $nome . PHP_EOL;
    if ($nome == 'Maria') {
        break;
    }
}

# Volta ao inicio do loop quando $i é igual a 10, e retorna com o valor de $i incrementado sem mostrar o valor 10
for ($i = 0; $i < 20; $i++) {
    if ($i == 10) {
        continue;
    }
    print $i . PHP_EOL;
}

# Volta ao inicio do loop quando $nome é igual a 'Maria', e retorna com o valor de $nome incrementado sem mostrar a string 'Maria'
$nomes = ['João', 'Maria', 'José'];
foreach ($nomes as $nome) {
    if ($nome == 'Maria') {
        continue;
    }
    print $nome . PHP_EOL;
}

/**GOTO
 * Introduzido no PHP 5.3
 * Permite sair do loop e ir para um label(nome seguido de ':') especifico fora da assinatura
 * Quando encontrar a condição do if o loop irá saltar para o código do label
 */
for ($i = 0; $i < 20; $i++) {
    if ($i == 10) {
        goto teste;
    }
    print $i . PHP_EOL;
}
# Este print não vai ser executado. Apenas o label teste
print 'fim do loop';
teste:
print 'Aqui';
