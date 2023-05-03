<?php

/*La criba d'Eratòstenes és un algoritme pensat per a trobar nombres primers dins d'un interval donat. 
Basant-te en la informació de l'enllaç adjunt, implementa la criba d'Eratòstenes dins d'una funció, 
de tal forma que puguem invocar la funció per a un número concret.*/

function crearArray(int $numero){
    $lista = [];
    for ($i = 1; $i <= $numero; $i++) {
        array_push($lista, $i);
    }
    return $lista;
}

$numero = 100;
$lista=[];
$lista = crearArray($numero);





$i=0;
$max = count($lista);
while($i < $max)
{
    if($lista[$i] == 1)
    {
        $lista[$i] = "";  
        $i++; 
    } 
    if(!esPrimo($lista[$i]))
    {
            $lista[$i] = "";
    }
    $i++; 
}

for ($i = 0; $i <= $numero; $i++) {
    if($lista[$i]=="")
    {
        unset($lista[$i]);
    } 
}

function esPrimo($numero)
{
    if(!is_numeric($numero))
        //Comprobamos si es un número valido, ya que sino nos dara un error 500. 
        return false;
    
    for ($i = 2; $i < $numero; $i++) {
        
        if (($numero % $i) == 0) {
            
            // No es primo 🙁
            return false;

        }
    }

    // Es primo
    return true;
}


print_r($lista);
