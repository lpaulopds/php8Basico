<?php

class Animal
{
    function mover()
    {
        print 'Mover a partir da classe base';
    }
}

class Mamifero extends Animal
{
}

class Peixe extends Animal
{
    # override da classe base
    function mover()
    {
        print 'Mover a partir da classe peixe';
    }
}

$animal = new Animal();
print $animal->mover();

echo PHP_EOL; // Quebra de linha no terminal

$mamifero = new Mamifero();
print $mamifero->mover();

echo PHP_EOL; // Quebra de linha no terminal

$peixe = new Peixe();
print $peixe->mover();

echo PHP_EOL; // Quebra de linha no terminal

// ----- //

/**Parent class - Classe pai */
class Retangulo
{
    public $largura, $altura;

    function __construct($l, $a)
    {
        $this->largura = $l;
        $this->altura = $a;
    }

    function calculaArea()
    {
        return $this->largura * $this->altura;
    }
}

class Quadrado extends Retangulo
{
    function __construct($l)
    {
        $this->largura = $l;
        $this->altura = $l;
    }
}

$ret = new Retangulo(10, 20);
$quad = new Quadrado(10);

print $ret->calculaArea();
echo PHP_EOL; // Quebra de linha no terminal
print $quad->calculaArea();
echo PHP_EOL; // Quebra de linha no terminal

# também é possível chamar o construtor da classe pai usando a expressão parent
class Quadrado1 extends Retangulo
{
    function __construct($l)
    {
        parent::__construct($l, $l);
    }
}

$quad1 = new Quadrado1(5);
print $quad1->calculaArea();
echo PHP_EOL; // Quebra de linha no terminal

# também é poosível chamar o construtor da classe pai usando o nome da própria classe
class Quadrado2 extends Retangulo
{
    function __construct($l)
    {
        Retangulo::__construct($l, $l);
    }
}

$quad2 = new Quadrado2(15);
print $quad2->calculaArea();
