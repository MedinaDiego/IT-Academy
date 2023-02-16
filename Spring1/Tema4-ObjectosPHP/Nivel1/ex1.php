<?php
/*Crea una classe Employee, defineix com a atributs el seu nom i sou. 
Definir un mètode initialize que rebi com a paràmetres el nom i sou. Plantejar un segon mètode print 
que imprimeixi el nom i un missatge si ha de pagar o no impostos (si el sou supera 6000, paga impostos)
.*/

class Employee
{
    public $nom = "";
    public $sou = 0;

    /* 
    constructor
     public function __construct($n,$s){
        $this->nom = $n;
        $this->sou = $s;
     } */
    public function initialize($nom, $sou)
    {
        $this->nom = $nom;
        $this->sou = $sou;
    }

    //setters
    public function setNom($nom)
    {
        $this->nom = $nom;
    }

    public function setSou($sou)
    {
        $this->sou = $sou;
    }

    //Getters
    //print que imprimeixi el nom
    public function getNom()
    {
        return $this->nom;
    }

    public function getSou()
    {
        return $this->sou;
    }

    public function impostos()
    {
        $sou = $this->sou;
        if ($sou > 6000) {
            echo "\nHas de pagar impostos";
        } else {
            echo "\nNo has de pagar impostos";
        }
    }
}

$persona = new Employee();
$persona->initialize("Pere", 7500);
echo $persona->getNom();
$persona->impostos();
