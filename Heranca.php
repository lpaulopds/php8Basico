<?php

# exemplo de classe sem herança
class Animais
{
    public $especie;
    public $peso;

    function tipoEspecie()
    {
        return "Animal da espécie {$this->especie}";
    }
}

$animal = new Animais();
$animal->especie = 'Mamíferos';
print $animal->tipoEspecie();

/**Classe com herança
 * Não precisa declarar novamente as propriedades e métodos da classe extendida
 */
class Mamifero extends Animais
{
    public $quantidade_patas;
    public $tem_pelo;

    function quantidadePatas()
    {
        return "O animal da espécie {$this->especie} tem {$this->quantidade_patas} patas.";
    }
}

$mamifero = new Mamifero();
$mamifero->especie = 'Cavalo';
$mamifero->quantidade_patas = 4;
print $mamifero->quantidadePatas();
