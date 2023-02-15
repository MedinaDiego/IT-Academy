<?php

/*
 *
 * Imprimeix per pantalla "Hello, World!" utilitzant una variable. Després:
 * 
 * Converteix tots els caràcters de l'string a majúscules i imprimeix en pantalla.
 * Imprimeix per pantalla la mida (longitud) de la variable.
 * Imprimeix per pantalla l'string en ordre invers de caràcters.
 * Crea una nova variable amb el contingut "Aquest és el curs de PHP" i imprimeix per pantalla la concatenació de 
 * tots dos strings.
 * 
 */

 $texto = "Hello, World!";
 $textoMayus = strtoupper($texto);

 echo $textoMayus;
 
 $longitud = strlen($texto);

 echo "\nLa longitud de << $texto >> es $longitud";

 $textoInverso = strrev($texto);

 echo "\n$textoInverso";

 $contigut = '"Aquest és el curs de PHP" ';
 echo "\n".$contigut.$texto;
?>
