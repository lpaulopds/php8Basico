<?php

/**Public - pode ser acessada em qualquer lugar do código
 * Protected - pode ser acessada pela classe e classes extendidas
 * Private - só pode ser acessada pela própria classe
 */

class ClasseTeste
{
    public $publica = 'a';
    protected $protegida = 'b';
    private $privada = 'c';
}

class ClasseDerivada extends ClasseTeste
{
    function teste()
    {
        # possível
        print $this->publica;

        # gera erro
        // print $this->protegida;

        # gera erro
        // print $this->private;
    }
}

$a = new ClasseTeste();
# possível
$a->publica = '1';

# gera erro
// $a->protegida = '2';

# gera erro
// $a->privada = '3';

$b = new ClasseDerivada();
# possível
$b->publica = '1';

# gera erro
// $b->protegida = 'b';

# gera erro
// $b->privada = 'c';

# executa a função a função da classe
$b->teste();
