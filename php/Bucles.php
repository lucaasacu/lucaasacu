<?php

$i = 0;

while($i < 5){
    echo("<h1> $i </h1>");

    $i ++;

}

echo ("<hr>");

$j = 0;
$sigo = true;

while($sigo){
echo("<h1> $j </h1>");
$j ++;
if($j >= 5){
    $sigo = false;
    }
}

echo ("<hr>");
echo ("<hr>");


for($k = 0; $k <= 4; $k ++){
    echo("<h1>$k</h1>");
}

echo ("<hr>");
echo ("<hr>");
echo ("<hr>");
echo ("<hr>");

$varUno = true; 
for($n = 0; $varUno; $n++){
    echo("<h1>$n</h1>");
        if($n >= 4){
        $varUno = false;
     }
}

echo ("<hr>");
echo ("<hr>");
echo ("<hr>");
echo ("<hr>");


$h = 0;
do{


    echo("<h1>$h</h1>");
    $h ++;


}while($h < 5);

echo ("<hr>");
echo ("Con clusion if");

$t = 9;
do{

    if($t > 5){
        $t = 0;
    }
    echo("<h1>$t</h1>");
    $t ++;


}while($t < 5);







?>