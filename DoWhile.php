<?php

/**No DoWhile a execução do código é feita antes da condição */
$x = 0;
do {
    print $x++ . PHP_EOL;
} while ($x <= 10);
