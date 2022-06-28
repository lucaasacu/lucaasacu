
<?php


    $numUno = 5;
    $numDos = 4;
    $numTres = 6;
    $numCuatro = 2;
    $numNegativo = -3;

    // Titulo y informacion sobre el operador.

    echo("<h1>Operadores Aritmeticos</h1>");
    echo("<p><b>Utilizamos operaciones</b>: suma, resta, division, multiplicacion y potencia.</p>");
    echo("<ul>
        <li> numUno = 5 </li>
        <li> numDos = 4 </li>
        <li> numTres = 6 </li>
        <li> numCuatro = 2 </li>
        <li> numNegativo = -3 </li>
    </ul>");
    echo("<hr>");

     echo("<p><b>numUno + numDos (5+4) y uso var_dump</b></p>");
        $resultado = $numUno + $numDos;
        var_dump($resultado);
        echo("<p><b>Uso print_r</b></p>");
        print_r($resultado);
        echo("<p><b>Uso echo</b></p>");
        echo($resultado);

    echo("<hr>");
    echo("<p><b>-numUno -(5)</b></p>");
        $resultado = -$numUno;
        print_r($resultado);
        echo("<p><b>numNegativo (-3)</b></p>");
        print_r($numNegativo);
        echo("<p><b>-numNegativo -(-3)</b></p>");
        $resultado = -$numNegativo;
        print_r($resultado);
    echo("<hr>");
        echo("<p><b> numTres - numDos (6-4)</b></p>");
        $resultado = $numTres - $numDos;
        print_r($resultado);
    echo ("<hr>");
    echo("<p><b> numUno * numCuatro (5*2)</b></p>");
    $resultado = $numUno * $numCuatro;
    print_r($resultado);
    echo ("<hr>");
    echo("<p><b> numTres / numDos (6/4)</b></p>");
        $resultado = $numTres / $numDos;
        print_r($resultado);
    echo ("<hr>");
    echo("<p><b> numTres % numUno (6%5)</b></p>");
        $resultado = $numTres % $numUno;
        print_r($resultado);
    echo("<hr>");
    echo("<p><b> numUno ** numCuatro (5**2)</b></p>");
        $resultado = $numUno ** $numCuatro;
        print_r($resultado);
    echo("<hr>");
    echo("<p><b> (numTres + numDos)/2 ((6+4)/2)</b></p>");
        $resultado =($numTres+$numDos)/2;
        print_r($resultado);
        echo("<p><b> numTres + numDos/2 (6+4/2)</b></p>");
        $resultado =$numDos+$numTres/2;
        print_r($resultado);

    echo("<hr>");
    echo("<hr>");
    echo("<hr>");

?>
<!DOCTYPE html>
<html>
    <head>
        <title>Operadores Aritmeticos</title>
    </head>
    <body>
    </body>
</html>