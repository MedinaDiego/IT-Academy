<?php 

abstract class dado{
   //atributos
   public $cara1 = "As";
   public $cara2 = "K";
   public $cara3 = "Q";
   public $cara4 = "J";
   public $cara5 = 7;
   public $cara6 = 8;

   //constructor
   public function __construct($cara1, $cara2, $cara3, $cara4, $cara5, $cara6){
       $this->cara1 = $cara1;
       $this->cara2 = $cara2;
       $this->cara3 = $cara3;
       $this->cara4 = $cara4;
       $this->cara5 = $cara5;
       $this->cara6 = $cara6;
   }

   //getters
   public function getCara1(){
       return $this->cara1;
   }

   //setters
   public function setCara1($cara1){
       $this->cara1 = $cara1;
   }

}