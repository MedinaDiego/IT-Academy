<?php

interface carCouponGenerator
{
    public function addSeasonDiscount($isHighSeason);
    public function addStockDiscount ($bigStock);
    public function printDiscount();
}

class bmwCuoponGenerator implements carCouponGenerator
{
    private $discount = 0;
   
    public function addSeasonDiscount($isHighSeason)
    {
        return $this->discount = 0;
        if(!$isHighSeason)
        {
            return $this->discount += 5;
        }   
    }

    public function addStockDiscount ($bigStock)
    {
        $this->discount = 0;
        if($bigStock)
        {
            return $this->discount += 7;
        }
    }

    public function printDiscount()
    {
        return "Get ".$this->discount."% off the price of your new car.";
    }
} 

class mercedesCuoponGenerator implements carCouponGenerator
{
    private $discount = 0;
    
    public function addSeasonDiscount($isHighSeason)
    {
        $this->discount = 0;
        if(!$isHighSeason)
        {
            return $this->discount += 4;
        }
        
    }

    public function addStockDiscount ($bigStock)
    {
        $this->discount = 0;
        if($bigStock)
        {
            return $this->discount += 10;
        }
    }

    public function printDiscount()
    {
        return "Get ".$this->discount."% off the price of your new car.";
    }
}

class coupon
{
    private $car;
    private $isHighSeason;
    private $bigStock;

    public function couponGenerator($car, $isHighSeason, $bigStock){
        if ($car == "bmw") {
            $bmw = new bmwCuoponGenerator();
            $bmw->addSeasonDiscount($isHighSeason);
            $bmw->addStockDiscount($bigStock);
            echo $bmw->printDiscount();

        } else if ($car == "mercedez") {
            $mercedes = new mercedesCuoponGenerator();
            $mercedes->addSeasonDiscount($isHighSeason);
            $mercedes->addStockDiscount($bigStock);
    
            echo  $mercedes->printDiscount();
        }
    }
}

