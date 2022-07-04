<?php

# funções anônimas podem ser usadas como argumentos de outras funções
$a = function () {
    return '<p>Função Anônima</p>';
};

function falar($x)
{
    print $x;
}

falar($a());
