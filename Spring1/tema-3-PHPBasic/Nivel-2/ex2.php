<?php
$cadena = "wxyz";
//echo $cadena;
if (strlen($cadena) > 1) {
    $inicio = $cadena[0];
    $fin = $cadena[strlen($cadena) - 1];
    $cadena = substr($cadena, 1, strlen($cadena) - 2);

    echo $fin . $cadena . $inicio;
} else {
    echo $cadena;
}
