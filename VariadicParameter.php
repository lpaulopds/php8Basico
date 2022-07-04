<?php

/**É possível passar mais parâmetros e argumentos
 * do que os descritos na criação da função
 */

function outraFuncao($a)
{
    # aqui o parâmetro $a fica com o valor igual o de $x
    print $a . PHP_EOL;

    $x = func_get_arg(0);
    $y = func_get_arg(1);
    $z = func_get_arg(2);

    print "$x - $y - $z";

    echo PHP_EOL; // Quebra de linha no terminal

    # conta a quantidade de argumentos passados para a função
    print func_num_args();
}

outraFuncao(10, 20, 30);

echo PHP_EOL; // Quebra de linha no terminal

# variadic parameter
function minhaFuncao(...$argumentos)
{
    foreach ($argumentos as $v) {
        print $v . PHP_EOL;
    }
}
# dessa maneira você pode usar quantos argumentos quiser na chamada da função
minhaFuncao(10, 20, 30, 40, 50, 60);
