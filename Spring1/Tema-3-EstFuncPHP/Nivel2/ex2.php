<?php

$duracion = 16;
pagar_llamada($duracion);

function pagar_llamada($duracion)
{
    $tiempoMin = 3;
    $precioAdicional = 5;
    $precioFijo = 10;

    if ($duracion > $tiempoMin) {
        $precio = (($duracion - $tiempoMin) * $precioAdicional) + $precioFijo;
        echo "El precio de tu llamada es de $precio centimos";
    } else {
        echo "El precio de tu llamada es de $precioFijo centimos";
    }
}
