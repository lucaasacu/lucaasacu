<?php

// Total plata que tiene el cajero
$totalPlata = 150000;
// Maximo que se puede retirar por plata
$maximoSacar = 15000;

$respuesta = "";

// Plata guardada en el cajero
$plataGuardada = 50000;

// Plata que voy a sacar
$plataRetirar = 10000;

$recibo = true;

$prestamo = "r";


if($plataRetirar > $totalPlata){

    $respuesta = " No hay dinero para retirar";
}elseif($plataRetirar >= $maximoSacar){
    $respuesta = "Estas pidiendo mas de lo que se puede retirar";
}elseif($plataRetirar > $plataGuardada){
    $respuesta = "No puedes sacar esa plata porque no la tienes";

}else{
    $respuesta = "Puede retirar su dinero";
    if($recibo){
        $respuesta .= "<br> Imprimiendo recibo";

    }else{
        $respuesta .= "<br> Usted cuida el planeta";
    }

    switch($prestamo){
        case 1: 
            $respuesta .= "<br>Usted saco 10000";
            break;
        case 2: 
            $respuesta .= "<br>Usted saco 20000";
         break;
        case 3: 
            $respuesta .= "<br>Usted saco 30000";
        break; 
        case 4: 
            $respuesta .= "<br>Usted saco 40000";
        break;  
        default:
            $respuesta .= "<br> Usted saco 500000";
            break;     
    }
}

?>
<!DOCTYPE html>
<html>
    <head>
    </head>
    <body>
        <h1>Respuesta:<?=$respuesta?></h1>
    </body>
</html>
