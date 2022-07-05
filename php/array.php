<?php

echo("Soy Array<br>");

$arrayColoresUno = array("Verde","Naranja","Rojo","Violeta");
print_r($arrayColoresUno);

echo("<br>");
$arrayColoresUno[] = "Amarillo";
$arrayColoresUno[] = "Marron";
$arrayColoresUno[6] = "Azul";
$arrayColoresUno[] = "Rosado";
$arrayColoresUno[10] = "Gris";
$arrayColoresUno[] = "Negro";
$arrayColoresUno[8] = "Turquesa";
$arrayColoresUno[] = "Cian";
print_r($arrayColoresUno);

echo("<br>");
echo("<hr>");

$arrayColoresDos = array("Amarillo" =>"#00FF4D", "Rojo" => "#C70039","Verde" =>"#166D00");
print_r($arrayColoresDos);

$arrayColoresDos['Azul']  = "#0036FF";
$arrayColoresDos[]  = "#FF009E";
$arrayColoresDos[]  = "#8300FF";
$arrayColoresDos['Blanco']  = "#FFFFFF";
$arrayColoresDos['Negro']  = "#623090";
$arrayColoresDos['Negro']  = "#000000";

echo("<br>");
print_r($arrayColoresDos);

echo("<br>");
var_dump($arrayColoresDos);

echo("<br>");
print_r($arrayColoresDos['Blanco']);
if($arrayColoresDos['Blanco'] == "#ffffff"){
    echo("<br>Soy el blanco");
}

foreach($arrayColoresDos as $valor){
    echo("<br>");
    print_r("Color Hex:".$valor);
    if($valor == "#FFFFFF"){
        echo(" Soy el color blanco");

    }

}

echo("<br>");
echo("<hr>");

foreach($arrayColoresDos as $clave => $valor){
    echo("<br>");
    print_r("Color:".$clave." Hex:".$valor);
    if($valor == "#FFFFFF"){
        echo(" Soy el color blanco");

    }
}

// ----------------------------------------------\\
// ----------------------------------------------\\
// ----------------------------------------------\\
// ----------------------------------------------\\



echo("<br>");
echo("<hr>");
$arrayDesordenado = array(5,7,2,3,9,1);
$arrayOrdenado = array();
$numeroMenor = 0;
print_r($arrayDesordenado);

$totalArray = count($arrayDesordenado);
for($k=0; $k<$totalArray; $k++){

    for($i=0; $i<$totalArray; $i++){
        print_r("<br>".$arrayDesordenado[$i]);
        if($arrayDesordenado[$i] != null && ($arrayDesordenado[$i] < $numeroMenor) || $numeroMenor == 0){
            $numeroMenor = $arrayDesordenado [$i];
            $posicionNumero = $i;



        }


    } 
    $arrayOrdenado[] = $numeroMenor;
    $arrayDesordenado[$posicionNumero] = null;
    print_r("<br> Numero menor obtenido:".$numeroMenor);
    $numeroMenor = 0;
}

echo("<br> Mi array Ordenado:");
print_r($arrayOrdenado);



// ----------------------------------------------\\
// ----------------------------------------------\\
// ----------------------------------------------\\
// ----------------------------------------------\\



echo("<br>");
echo("<hr>");


$strTexto = "Soy el texto";
$arrayTexto = str_split($strTexto);
$arrayTextoInverso = array();
$arrayTextoFinal = array();
$i = 0;
print_r($strTexto);
print_r($arrayTexto);

foreach($arrayTexto as $letra){

    $final = count($arrayTexto) - $i;
    $arrayTextoInverso[$final] = $letra;
    $i++;


}
echo("<br>");
echo("<br> Inverso:");
print_r($arrayTextoInverso);

for($k=0; $k<=count($arrayTextoInverso); $k++){

    $final = $k;
    if(isset($arrayTextoInverso[$final])){
        $arrayTextoFinal[$k] = $arrayTextoInverso[$final];
    }
    
}
echo("<br>");
echo("<br> Final:");
print_r($arrayTextoFinal);
$textoFinal = implode("",$arrayTextoFinal);
echo("<br>");
print_r($textoFinal);



?>