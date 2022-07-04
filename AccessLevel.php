<?php

/**Níveis de acesso */
class MinhaClasse
{
    public $v1;
    protected $v2;
    private $v3;
}

$a = new MinhaClasse();
$a->v1 = '111';
$a->v2 = '222';
$a->v2 = '333';
