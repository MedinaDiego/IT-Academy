<?php
class Tigger
{
    private static $instance;
    protected static $_count = 0;


    private function __construct()
    {
        echo "Building character..." . PHP_EOL;
    }

    static function getInstance()
    {
        if (self::$instance) {
            echo "\nYa se ha instaciado este objecto.";
            return self::$instance;
        }
        self::$instance = new Tigger();
        return self::$instance;
        
    }

    public function roar()
    {
        echo "Grrr!" . PHP_EOL;
        self::$_count++;
    }

    public static function getCount()
    {
        return "He rugido ".static::$_count." veces.";
    }
}
