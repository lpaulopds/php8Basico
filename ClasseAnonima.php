<?php

# classe anônima não tem nome e é fechada com ';' após a chave de fechamento
$b = new class
{
    function teste()
    {
        print 'Classe anônima';
    }
};
$b->teste();
