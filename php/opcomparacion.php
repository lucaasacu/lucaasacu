<?php
$numUno = 4;
$numDos = 6;
$numTres = 9;
$numCuatro = 4;
$textUno = "4";

echo("<h2>Operadores Comparacion</h2>");

    $resultado = $numUno == $numDos;
    var_dump($resultado);
    $resultado = $numUno == $numCuatro;
    var_dump($resultado);
    $resultado = $numUno == $textUno;
    var_dump($resultado);
    $resultado = $numUno === $textUno;
    var_dump($resultado);

echo("<hr>");
    $resultado = $numUno != $numDos;
    var_dump($resultado);
    $resultado = $numUno != $numCuatro;
    var_dump($resultado);
    $resultado = $numUno !== $textUno;
    var_dump($resultado);
    $resultado = $numUno != $textUno;
    var_dump($resultado);
echo("<hr>");
$resultado = $numUno > $numDos;
var_dump($resultado);
$resultado = $numUno < $numDos;
var_dump($resultado);
$resultado = $numUno <= $numDos;
var_dump($resultado);
$resultado = $numUno >= $numDos;
var_dump($resultado);
$resultado = $numUno >= $numCuatro;
var_dump($resultado);
$resultado = $numUno > $numCuatro;
var_dump($resultado);
$resultado = $numUno > $textUno;
var_dump($resultado);
$resultado = $numUno >= $textUno;
var_dump($resultado);








?>