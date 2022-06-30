<?php
echo("<h1>Operadores Asignacion</h1>");

echo("<p><b>numero =</b> </p>");
$numero = 7;
print_r($numero);
echo("<p><b>numero + 2 = </b> </p>");
$numero += 2;
echo("<br>");
print_r($numero);
echo("<p><b>(numero + 2) - 4 = </b> </p>");
$numero -= 4;
echo("<br>");
print_r($numero);

echo("<hr>");
$texto = "Hola soy texto";
print_r($texto);
echo("|");
$texto = "Hola soy texto"." - Soy segunda parte";
print_r($texto);
echo("<hr>");
$texto = "Hola soy texto"." - Soy numero:" .$numero;
print_r($texto);
echo("<hr>");
$texto = $numero."Hola soy texto"." - Soy numero:" .$numero;
var_dump($texto);
echo("<hr>");
$varConcateno = "Primera parte";
print_r($varConcateno);
echo("|");
$varConcateno .=" - soy la segunda parte";
print_r($varConcateno);






?>
<!DOCTYPE html>
<html>
    <head>
        <title>Operadores Asignacion</title>
    </head>
    <body>
    </body>
</html>