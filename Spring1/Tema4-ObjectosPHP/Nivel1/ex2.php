<?php
/*
 *
 * Escriu un programa que defineixi una classe Shape amb un constructor que rebi com a paràmetres l'ample i alt. Defineix dues subclasses; Triangle i Rectangle que
 * heretin de Shape i que calculin respectivament l'àrea de la forma area().
 * 
 * A l'arxiu main defineix dos objectes, un triangle i un rectangle i truca al mètode area de cadascun.
 * 
 */

abstract class Shape
{
    public $ample = 0;
    public $alt = 0;
    public $result = 0;

    public function __construct($am, $al)
    {
        $this->ample = $am;
        $this->alt = $al;
    }

    public abstract function area();
}

class Triangle extends Shape
{
    public function area()
    {
        return  $this->result = ($this->ample * $this->alt) / 2;
    }
}

class Rectangle extends Shape
{
    public function area()
    {
        return  $this->result = $this->ample * $this->alt;
    }
}

$area1 = new Triangle(3, 3);
echo $area1->area();

$area2 = new Rectangle(5, 4);
echo "\n" . $area2->area();
