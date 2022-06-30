<?php

$a = 5;
$b = 3;

if ($a > $b){
    echo("A es mayor a B");
};


if(($a > $b) || ($a/2 < 3) ){
    echo("$a es mayor que $b o $a dividido entre 2 es menor a 3");
};


 if(($a > $b) && ($a > 10)){
    echo('<h1>$a es mayor a $b y $a es mayor a 10</h1>');
 }else{
echo('<h1>$a no es mayor a $b y $a es mayor a 10</h1>');

 }

echo ("<hr>");
$a = 15 ;
$b = "2";

if($a>$b){
echo('<h1>$a es mayor a $b</h1>');

}elseif($a === $b){
    echo('<h1>$a es identico a $b</h1>');
}elseif($a == $b){
    echo('<h1>$a es igual a $b</h1>');

}else{
    echo('<h1>$a es menor a $b');

}

$i = "hola";
	switch($i){
		case 0:
			echo('<h1> $i vale 0 </h1>');
			break;
		case 1:
			echo('<h1> $i vale 1 </h1>');
			break;
		case 2:
			echo('<h1> $i vale 2 </h1>');
			break;			
		case 3:
			echo('<h1> $i vale 3 </h1>');
			break;	
		case "hola":
			echo('<h1> $i vale hola </h1>');
			break;
		default: 
			echo('<h1> $i vale mas que 3 </h1>');
	}


?>