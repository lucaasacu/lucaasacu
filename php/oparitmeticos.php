<?php

    $numUno = 5;
    $numDos = 4;
    $numTres = 6;
    $numCuatro = 2;
    $numNegativo = -3;

    $resultado = $numUno + $numDos;
    echo("<h2>Operadores Aritmeticos</h2>");
    var_dump($resultado);
    echo("-");
    print_r($resultado);
    echo("-");
    echo($resultado);

    echo("<hr>");
        $resultado = -$numUno;
        print_r($resultado);
        echo("|");
        print_r($numNegativo);
        echo("|");
        $resultado = -$numNegativo;
        print_r($resultado);
    echo("<hr>");
        $resultado = $numTres - $numDos;
        print_r($resultado);
    echo ("<hr>");
    $resultado = $numUno * $numCuatro;
    print_r($resultado);
    echo ("<hr>");
        $resultado = $numTres / $numDos;
        print_r($resultado);
    echo ("<hr>");
        $resultado = $numTres % $numUno;
        print_r($resultado);
    echo("<hr>");
        $resultado = $numUno ** $numCuatro;
        print_r($resultado);
    echo("<hr>");
        $resultado =($numTres+$numDos)/2;
        print_r($resultado);
        echo("|");
        $resultado =$numDos+$numTres/2;
        print_r($resultado);
    echo("<hr>");
    echo("<hr>");
    echo("<hr>");
    echo("<h2>Operadores Asignacion</h2>");

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