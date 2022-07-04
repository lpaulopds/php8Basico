<?php

class Circulo
{
    const PI = 3.14;
}

print Circulo::PI;
echo PHP_EOL; // Quebra de linha no terminal
$c = new Circulo();
print $c::PI;
echo PHP_EOL; // Quebra de linha no terminal

// ----- //

# constantes são definidas no escopo global e estão sempre acessíveis
const APP_NAME = 'Aplicação';
print APP_NAME;
echo PHP_EOL; // Quebra de linha no terminal

function teste()
{
    print APP_NAME;
}

teste();
echo PHP_EOL; // Quebra de linha no terminal

# como concatenar constantes
print 'Nome da aplicação: ' . APP_NAME;
echo PHP_EOL; // Quebra de linha no terminal

// ----- //

# define não pode ser usado em contexto de classe
define('APPLICATION_NAME', 'Aplicação 1.0.0');
define('VERSAO', '1.0.0');
define('ERROS', true);
define('PI', 3.14);

print APP_NAME;
echo PHP_EOL; // Quebra de linha no terminal

// ----- //

# verifica se existe uma constante e define
if (!defined('APPNAME')) {
    define('APPNAME', 'Minha App');
}

print APPNAME;
echo PHP_EOL; // Quebra de linha no terminal

# verifica se existe uma constante e define
defined('CONSTANTE') or define('CONSTANTE', 'valor');

# é possível definir uma constante com arrays
const NOME = ['João', 'Alberto', 'Antonio'];
print NOME[0];
echo PHP_EOL; // Quebra de linha no terminal

# arrays no define
define('NAMES', ['João', 'Alberto', 'Antonio']);
print NAMES[2];
