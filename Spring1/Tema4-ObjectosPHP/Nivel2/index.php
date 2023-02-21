<?php 
require_once 'pokerdice.php';

$mano = array(); 
$numeroDados = 0;
$jugada = 0;

getTotalThrows($numeroDados,$mano, $jugada);

function getTotalThrows($numeroDados,$mano, $jugada){
    while($numeroDados < 5){
        $tiro = new pokerdice();
        $tiro->th_row();
        $resultado = $tiro->shapename();
        array_push($mano, $resultado);
        $numeroDados += 1;
    }

    print_r($mano);
}