<?php

require_once "poultry.php";

 

$TurkeyAdapter = new TurkeyAdapter(new Duck());

$TurkeyAdapter->process();


