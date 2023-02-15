<?php
    /*
     * Crea dos arrays, un que inclogui 5 integers, i un altre que inclogui 3 integers.
     * Afegeix un valor més a l'array que conté 3 integers.
     * Mescla els dos arrays i imprimeix la mida de l'array resultant per pantalla.
     * Ara imprimeix per pantalla l'array resultant valor a valor.
     * 
     * */ 


     $array_1 = array(1,2,3,4,5);
     $array_2 = array(6,7,8);
     
     print_r($array_1);
     print_r($array_2);
     
     $array_2[]=9;
     
     print_r($array_2);
     
     $array_3 = array_merge($array_1,$array_2);
     print_r($array_3);
     
     
     $mida = count($array_3);
     print_r($mida);
     echo "\n";
     foreach($array_3 as $value){
         echo $value;
     }
?>
