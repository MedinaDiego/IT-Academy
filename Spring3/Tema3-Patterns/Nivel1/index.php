<?php

/*
 * Patron de diseño SINGLETON: 
 * Se usa cuando no queremos que se instancia nuestro objecto repetitivas veces.
 */
require_once("tigger.php");
$tiger = Tigger::getInstance();

$tiger->roar();
$tiger->roar();
$tiger->roar();
$tiger->roar();
echo $tiger->getCount();

$tigre = Tigger::getInstance();

//echo "He rugido " . $cont . " veces.";
