<?php
// Autor: Marcos Gómez <mgomezmartin@iessansebastian.com>
require('HolaMundo.php');

print "Introduce tu nombre:";
$nombre = trim(fgets(STDIN));
print new HolaMundo($nombre);