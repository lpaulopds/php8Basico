<?php

/**Para impedir que uma classe derivada possa fazer override
 * de métodos, é preciso utilizar a expressão 'FINAL' no inicio da function
 */


class Veiculo
{
    final function mover()
    {
        // código aqui
    }
}

class Bicicleta extends Veiculo
{
    function mover()
    {
        # override do código original
        # com a declaração do 'final' na function da classe base, é apresentado um erro
    }
}


# classes com a expressão final no inicio, não podem ser herdadas
final class Humano
{
    function teste()
    {
        print 'teste';
    }
}

class Homem extends Humano
{
}

$h = new Homem();
$h->teste();

# Este código gera um erro fatal
