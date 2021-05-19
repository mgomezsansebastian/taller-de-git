<?php
// Autor: Marcos Gómez <mgomezmartin@iessansebastian.com>
print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
@print "Hola, {$nombre}\n";