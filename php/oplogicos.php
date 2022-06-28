<?php
$a = true;
$b = false;
$c = true;
$d = false;


echo("<h1>Operadores Logicos</h1>");
echo("<ul>
    
    <li> a = true </li>
    <li> b = false </li>
    <li> c = true </li>
    <li> d = false </li>
    
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

echo("<hr>");
	$resultado = $a || $b;
	var_dump($resultado);
	$resultado = $a || $c;
	var_dump($resultado);
	$resultado = $b ||  $d;
	var_dump($resultado);

echo("<hr>");
	$resultado = !$a;
	var_dump($resultado);
	$resultado = !$b;
	var_dump($resultado);

echo("<hr>");
	$resultado = $a xor $b;
	var_dump($resultado);
	$resultado = $a xor $c;
	var_dump($resultado);
	$resultado = $b xor $d;
	var_dump($resultado);	
	echo("<hr>");
	$resultado = !$a;
	var_dump($resultado);
	$resultado = !$b;
	var_dump($resultado);











?>
<!DOCTYPE html>
<html>
    <head>
        <title>Operadores Logicos</title>
    </head>
    <body>
    </body>
</html>