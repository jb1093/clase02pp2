<?php

include"ejercicio1.php";
//require"ejercicio20.php";

$miNombre="tu nombre";
//var_dump($miNombre);
mostrar($miNombre);
//echo "llegue";

/*$i=0;
for (;;){
	
	if($i==10)
	{
		break;
	}
	$i++;
	echo $i;
}*/

$i=0;//1et paso, se ejecuta una unica vez
while ($i<10) //se cumple a partir de la variable y da 10 vueltas. 2do paso que es la logica
{
	
	echo "<br>i: $i";
	$i++;//3er paso, es el cambio de la condicion para poder salir
}

for ($i=0; $i <10 ; $i++) 
{ 
	echo "<br>i: $i";
}

?>