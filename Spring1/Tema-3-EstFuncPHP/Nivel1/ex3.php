<?php
define("AMAGATALL", 10);
$n = 0;
comptar($n);
function comptar($n)
{
    if (is_null($n) || $n == 0) {
        $n = AMAGATALL;
    }
    for ($i = 1; $i < $n; $i++) {
        $i += 1;
        echo $i . "\n";
    }
}
