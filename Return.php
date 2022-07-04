<?php

$nome = 'João';
if (avaliar_nome($nome)) {
    print 'O nome está correto';
}

function avaliar_nome($n)
{
    if ($n == 'João') {
        return true;
    } else {
        return false;
    }
}
