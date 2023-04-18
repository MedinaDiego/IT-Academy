<?php

require_once "coupongenerator.php";

$car = "bmw";
$isHighSeason = false;
$bigStock = true;
(new coupon())->couponGenerator($car, $isHighSeason, $bigStock);
echo "\n";

$car = "mercedez";
$isHighSeason = false;
$bigStock = true;
(new coupon())->couponGenerator($car, $isHighSeason, $bigStock);


/*
function cupounGenerator($car, $isHighSeason, $bigStock)
{
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
}*/
