<?php

$n = 20;
comptar($n);
function comptar($n)
{
    if (empty($n)) {
        $n = 10;
    }

    for ($i = 1; $i < $n; $i++) {
        $i += 1;
        echo $i . "\n";
    }
}
