<?php
$n = 20;
comptar($n);
function comptar($n)
{
    for ($i = 1; $i < $n; $i++) {
        $i += 1;
        echo $i . "\n";
    }
}
