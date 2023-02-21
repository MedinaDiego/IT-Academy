<?php

class pokerdice
{
    private $num_aleatorio = 0;
    private $cara;

    /*public function __construct()
    {
    }*/

    public function th_row()
    {
        return $this->num_aleatorio = mt_rand(1, 6);
    }

    public function shapename()
    {
        switch ($this->num_aleatorio) {
            case 6:
                return $this->cara = "AS";
                break;
            case 5:
                return $this->cara = "K";
                break;
            case 4:
                return $this->cara = "Q";
                break;
            case 3:
                return $this->cara = "J";
                break;
            case 2:
                return $this->cara = 8;
                break;
            case 1:
                return $this->cara = 7;
                break;
            default:
                echo "error";
        }
    }

}
