<?php
$numUno = 4;
$numDos = 6;
$numTres = 9;
$numCuatro = 4;
$textUno = "4";

echo("<h1>Operadores Combinados</h1>");

echo("<hr>");
$resultado = ($numUno == $numDos) || ($numCuatro === $textUno);
var_dump($resultado);

$resultado = ($numTres != $numDos) && ($numCuatro === $numUno);
var_dump($resultado);




?>
<!DOCTYPE html>
<html>
    <head>
        <title>Operadores Combinados</title>
    </head>
    <body>
    </body>
</html>