<?php
echo("<h1>Operadores Asignacion</h1>");

$numero = 7;
print_r($numero);
$numero += 2;
echo("|");
print_r($numero);
$numero -= 4;
echo("|");
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