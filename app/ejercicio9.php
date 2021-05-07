<?php
$divisor=15;
	echo "Numero elegido: $divisor <br>";

	for($numeroAnterior=2;$numeroAnterior<$divisor;$numeroAnterior++)
{
	if($divisor%$numeroAnterior==0)
	{
		break;
		
	}
	
}

if ($numeroAnterior<$divisor)
{
	echo "$divisor no es primo";
}else
{
	echo "$divisor es primo";
}






?>