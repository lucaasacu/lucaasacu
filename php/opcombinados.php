<?php
$numUno = 4;
$numDos = 6;
$numTres = 9;
$numCuatro = 4;
$textUno = "4";

echo("<h2>Operadores Combinados</h2>");

echo("<hr>");
$resultado = ($numUno == $numDos) || ($numCuatro === $textUno);
var_dump($resultado);

$resultado = ($numTres != $numDos) && ($numCuatro === $numUno);
var_dump($resultado);




?>