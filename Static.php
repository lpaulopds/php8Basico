<?php

class Operacoes
{
    static $valor1;
    static $valor2;

    static function adicionar()
    {
        return self::$valor1 + self::$valor2;
    }

    static function hashAleatoria()
    {
        $rand = mt_rand(0, 32);
        $code = md5($rand . time());
        return 'Hash: ' . $code;
    }
}
Operacoes::$valor1 = 10;
Operacoes::$valor2 = 20;
print Operacoes::adicionar();

echo PHP_EOL; // Quebra de linha no terminal

print Operacoes::hashAleatoria();
