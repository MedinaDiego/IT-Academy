<?php

$pila = array("casa", "mesa", "silla", "casa", "sofa", "sofa", 4, 2, 1, 4);
$longitud = sizeof($pila);

for ($i = 0; $i < $longitud; $i++) {
    $valor = $pila[$i];
    contar($valor, $longitud, $pila);
}

function contar($valor, $longitud, $pila)
{
    $contador = 0;
    for ($j = 0; $j < $longitud; $j++) {
        if ($pila[$j] == $valor) {
            $contador = $contador + 1;
        }
    }
    echo "<p>El valor " . $valor . " aparece " . $contador . " veces.</p>";
}
