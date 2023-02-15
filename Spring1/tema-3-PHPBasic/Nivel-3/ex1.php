<?php

$cadena = "Hello World";
$cadena = str_replace(' ', '', $cadena);
$longitud = strlen($cadena);
$pila = [];
for ($i = 0; $i < $longitud; $i++) {
    $valor = $cadena[$i];
    array_push($pila, $valor);
}

print_r($pila);
