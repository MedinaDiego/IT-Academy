<?php 
    /*
     * 
     * Declara dues variables X i Y de tipus int, dues variables N i M de tipus double i assigna a cadascuna un 
     * valor. A continuació, mostra per pantalla per a X i Y:
     * El valor de cada variable.
     * La suma.
     * La resta.
     * El producte.
     * El mòdul.
     * Per N i M realitzaràs el mateix.
     * Per a totes les variables (X, Y, N, M)
     * El doble de cada variable.
     * La suma de totes les variables.
     * El producte de totes les variables.
     * */

     $x=5;
    
     $y=2;
    
     $N=7.25;
 
     $M=3.25;

     echo "x = $x \ny = $y \nM = $M \nN = $N \n"; 
     echo "CASO 1: \nSuma: $x + $y = ".($x + $y)."\n";
     echo "Resta: $x - $y = ".($x - $y)."\n";
     echo "Producto: $x * $y = ".($x * $y)."\n";
     echo "modul: $x % $y = ".($x % $y)."\n";

     echo "CASO 2: \nSuma: $N + $M = ".($N + $M)."\n";
     echo "Resta: $N - $M = ".($N - $M)."\n";
     echo "Producto: $N * $M = ".($N * $M)."\n";
     //fmod — Devuelve el resto en punto flotante (módulo) de la división de los argumentos
     echo "modul: $N % $M = ".fmod($N,$M)."\n";
    

     echo "CASO 3: \nDoble: x = ".($x * 2)." \ny = ".($y * 2)." \nN= ".($N * 2)." \nM= ".($M * 2)."\n";
     echo "Suma de todas las variables: x + y + N + M = ".($x + $y + $N + $M)."\n";
     echo "Producto de todas las variables : x * y * N * M = ".($x * $y* $N * $M)."\n";
?>
