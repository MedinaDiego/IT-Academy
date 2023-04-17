<?php

/*
 * Patron de diseño SINGLETON: 
 * Se usa cuando no queremos que se instancia nuestro objecto repetitivas veces.
 * Además nos permite una acceso global para acceder a la instancia. Aunque hay muy pocos casos de usos
 * Por ejemplo: gestionar un fichero de logs. 
 */
require_once("tigger.php");
$tiger = Tigger::getInstance();

for ($i = 0; $i < 5; ++$i) {
    $tiger->roar();
    $cont = $tiger->getCounter($tiger);
}
echo "He rugido " . $cont . " veces.";
