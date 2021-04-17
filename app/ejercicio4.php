<?php
	$PrimerNumero=rand(1,100);
	$SegundoNumero=rand(1,100);
	$TercerNumero=rand(1,100);

	echo "Primer numero seleccionado $PrimerNumero <br>";
	echo "Segundo numero seleccionado $SegundoNumero <br>";
	echo "Tercer numero seleccionado $TercerNumero <br>";

	if ($PrimerNumero>$SegundoNumero && $PrimerNumero>$TercerNumero) {

		echo "El mayor numero es: $PrimerNumero";
	
	}elseif ($SegundoNumero>$TercerNumero) {
		
		echo "El mayor numero es: $SegundoNumero";
	}else{

		echo "El mayor numero es: $TercerNumero";
	}


?>