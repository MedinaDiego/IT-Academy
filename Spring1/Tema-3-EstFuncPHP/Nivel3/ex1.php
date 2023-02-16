<?php

$numero = 20;

$lista = [];

for ($i = 2; $i <= $numero; $i++) {
    array_push($lista, $i);
}

//print_r($lista);
$mod = 2;
for ($i = 0; $i <= $numero; $i++) {

    if (($lista[$i + 1] % $mod) == 0) {
        unset($lista[$i + 1]);
    }
}

print_r($lista);
