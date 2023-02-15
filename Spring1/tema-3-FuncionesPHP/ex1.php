<?php

$edad = 84;
verificarEdad($edad);

function verificarEdad($edad){
    if($edad%2 == 0){
        echo "Tú edad $edad es par";
    }else{
        echo "Tú edad  $edad es impar";
    }
}
