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

interface TurkeyAdap{
    public function quack();
    public function fly();
}

class TurkeyAdapter implements TurkeyAdap
{
    protected $NewTurkey;
    public function __construct(Turkey $NewTurkey)
    {
        $this->NewTurkey = $NewTurkey;
    }


    public function quack()
    {
        $this->NewTurkey->gobble();
    }

    public function fly()
    {
        $distance = 5;
        while($distance >0)
        {
            $this->NewTurkey->fly();
            $distance--;
        }
    }
}


