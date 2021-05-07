<?php
$ingreso=100;
	echo "Numero elegido: $ingreso <br>";
for($valor=0; $valor<=$ingreso; $valor++)
{
	$divisor=$valor;

	for($numeroAnterior=2;$numeroAnterior<$divisor;$numeroAnterior++)

{
	if($divisor%$numeroAnterior==0)
	{
		break;
		
	
	
}

if ($numeroAnterior<$divisor)
{
	//echo "$divisor no es primo";
}else
{
	echo "$divisor es primo <br>";
}

}




?>