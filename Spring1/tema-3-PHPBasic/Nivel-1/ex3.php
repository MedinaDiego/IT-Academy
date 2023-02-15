<?php

    /*
     * Crea una constant que contingui el teu nom i l'imprimeixi per pantalla. Has d'imprimir-la amb format de títol 
     * i lletra en negreta en HTML.
     * 
     * */
    
    define("NOMBRE", "Diego");

//$nom = 'Diego';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio 3</title>
</head>
<body>
    <h1><strong><?php echo NOMBRE;?></strong></h1>
</body>
</html>
