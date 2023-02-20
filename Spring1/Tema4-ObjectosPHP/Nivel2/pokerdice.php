<?php

Class pokerdice extends dado{
    public $cara;
    public function __construct(){

    }

    public function th_row(){
       return $cara = mt_rand(1,6);
    }

    public function shapename(){

    }

}