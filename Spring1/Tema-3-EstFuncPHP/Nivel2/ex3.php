<?php
//precios unitarios de los artículos 
define("PRECIOXOCOLATE", 1);
define("PRECIOXICLE", 0.50);
define("PRECIOCARAMEL", 1.50);

//Ahora necesito saber las unidades que compra el cliente:

$unidadXocolate = 2;

$unidadXicle = 1;

$unidadCaramel = 1;


$total = calc_precioXocalate($unidadXocolate) + calc_precioXicle($unidadXicle) + calc_precioCaramel($unidadCaramel);

echo "El total es: $total";

function calc_precioXocalate($unidadXocolate)
{
    $precio = $unidadXocolate * PRECIOXOCOLATE;
    return $precio;
}

function calc_precioXicle($unidadXicle)
{
    $precio = $unidadXicle * PRECIOXICLE;
    return $precio;
}

function calc_precioCaramel($unidadCaramel)
{
    $precio = $unidadCaramel * PRECIOCARAMEL;
    return $precio;
}
