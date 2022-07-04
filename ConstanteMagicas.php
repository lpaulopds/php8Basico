<?php

print __LINE__;
echo PHP_EOL; // Quebra de linha no terminal

print __FILE__;
echo PHP_EOL; // Quebra de linha no terminal

print __DIR__;
echo PHP_EOL; // Quebra de linha no terminal

teste();
function teste()
{
    $a = true;
    print __FUNCTION__ . PHP_EOL;
}

class MinhaClasse
{
    function identificar()
    {
        print __CLASS__ . PHP_EOL;
        print __METHOD__ . PHP_EOL;
    }
}

$a = new MinhaClasse();
$a->identificar();
echo PHP_EOL; // Quebra de linha no terminal
