<?php

//probabilidad = casos favorables / casos posibles * 100
// genera un numero aleatorio para saber cuantas veces va a intentar morderte 
$a = isBitten();
var_dump($a);

function isBitten()
{
    $d = mt_rand(1, 2);
    if ($d == 1) {
        $r = true;
    } else {
        $r = false;
    }
    return $r;
}
