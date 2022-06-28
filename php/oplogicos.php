<?php
$a = true;
$b = false;
$c = true;
$d = false;


echo("<h2>Operadores Logicos</h2>");
echo("<ul>
    
    <li> A = TRUE </li>
    <li> B = FALSE </li>
    <li> C = TRUE </li>
    <li> D = FALSE </li>
    
</ul>");
echo("Valor a");
echo("<br>");
var_dump($a);
echo("<hr>");
$resultado = $a && $b;
echo("Valores a y b");
echo("<br>");
var_dump($resultado);
echo("<hr>");
$resultado = $a && $c;
echo("Valores a y c");
echo("<br>");
var_dump($resultado);
echo("<hr>");
$resultado = $b && $d;
echo("Valores b y d");
echo("<br>");
var_dump($resultado);








?>