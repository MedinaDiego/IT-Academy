<?php

class Tigger
{
    //1. Necesitamos una variable estatica del patron
    private static $instance = null;

    //2.Añadimos el modificador de acceso PRIVATE para evitar el acceso del constructor fuera de esta clase. Es decir no podran hacer un NEW fuera de la clase.
    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    //3. Esta funcion comprueba que la variable instancia sea nula. Y solo permita instanciar la clase mediante esta funcion. 

    //Self hace referencia a la clase actual y se usando cuando instancia dicha clase, es decir se usan métodos estáticos.
    //This hace referencia al objeto actual, es decir, cuando una clase si tiene instancia. No se puede hacer referencia a métodos estáticos usando this pero si a métodos públicos, privados y protegidos.
    public static function getInstance(){
        if( null === self::$instance){
            self::$instance = new Tigger();
        }

        return self::$instance;
    }

    private function __clone()
    {
        
    }

    public function roar()
    {
        echo "Grrr!" . PHP_EOL;
    }
}
