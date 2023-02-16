<?php

require_once("tigger.php");
$tiger = Tigger::getInstance();

for ($i = 0; $i < 5; ++$i) {
    $tiger->roar();
    $cont = $tiger->getCounter($tiger);
}
echo "He rugido " . $cont . " veces.";
