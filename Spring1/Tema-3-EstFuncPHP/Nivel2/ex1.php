<?php
$any_inicio = 1960;
$any_fin = 2016;

any_olimpico($any_inicio, $any_fin);

function any_olimpico($any_inicio, $any_fin)
{
    while ($any_inicio <= $any_fin) {
        echo "<p>" . $any_inicio . "</p>";
        $any_inicio = $any_inicio + 4;
    }
}
