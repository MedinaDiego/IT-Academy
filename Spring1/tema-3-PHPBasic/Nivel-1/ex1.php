<?php
/*
 *Defineix una variable de cada tipus: integer,double,string i boolean. Després, imprimeix-les per pantalla.
 * 
 * Intenger: Un número entero (o integer) es un número del conjunto ℤ = {..., -2, -1, 0, 1, 2, ...}.
 * 
 * Los integer pueden especificarse mediante notación decimal (base 10), hexadecimal (base 16), octal (base 8) o 
 * binaria (base 2), opcionalmente precedidos por un signo (- o +).
 */
$entero = 1234;

echo "Tipo int = $entero\n";

/*
 * Punto flotante (float - Double)
 * Aunque depende del sistema, PHP típicamente utiliza el formato de doble precisión IEEE 754, el cual dará un error 
 * relativo máximo por aproximación del orden de 1.11e-16. Las operaciones aritméticas elementales no podrán generar 
 * grandes errores y, por supuesto, se han de considrar los errores por propagación al componer varias operaciones. 
 */

 $d = 1.234;

 echo "Tipo float = $d\n";

 /* STRING
  * Un string, o cadena, es una serie de caracteres donde cada carácter es lo mismo que un byte. Esto significa que 
  * PHP solo admite un conjunto de 256 caracteres, y de ahí que no ofrezca soporte nativo para Unicode.
  * Para especificar una comilla simple literal, se ha de escapar con una barra invertida (\). Para especificar una 
  * barra invertida literal, se duplica (\\). Todas las demás instancias de barras invertidas serán tratadas como una * barra invertida literal: esto significa que otras secuencias de escape que podrían utilizarse, tales como \r o 
  * \n, serán mostradas literalmente tal y como se especifican, en lugar de tener cualquier otro significado especial.
  */

$cadena= 'Hello world';
echo "Tipo string = $cadena\n";
/* Boolean : Un boolean expresa un valor que indica verdad. Puede ser true (verdadero) o false (falso).
 * 
 * Sintaxis: Para especificar un literal de tipo boolean se emplean las constantes true o false. 
 * Ambas no son susceptibles a mayúsculas y minúsculas.
 */

 $var = true;
 echo "Tipo bolean = $var";

 /*El valor true del tipo boolean es convertido al string "1". El valor false del tipo boolean es convertido al string "" (el string vacío). Esto permite la conversión en ambos sentidos entre los valores de los tipos boolean y string.*/


 ?>
