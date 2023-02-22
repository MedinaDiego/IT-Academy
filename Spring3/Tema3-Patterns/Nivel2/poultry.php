<?php

class Duck
{
    public function quack()
    {
        echo "Quack \n";
    }

    public function fly()
    {
        echo "I'm flying \n";
    }
}

class Turkey
{
    public function gobble()
    {
        echo "Gobble gobble \n";
    }

    public function fly()
    {
        echo "I'm flying a short distance \n";
    }
}

class TurkeyAdapter
{
    protected $turkey;
    public function __construct(TurkeyAdap $turkey)
    {
        $this->turkey = $turkey;
    }

    public function process(){
        $this->turkey->getDuck();
        $this->turkey->flyDuck();
    }
}

interface TurkeyAdap{
    public function getDuck();
    public function flyDuck();
}
