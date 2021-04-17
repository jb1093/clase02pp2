<?php
	$mes=rand(1,12);

	echo "Mes seleccionado: $mes <br>";
	if($mes>=4 && $mes<=6){
		echo "Otoño";

	}elseif ($mes>=7 && $mes<=9) {
		echo "Invierno";

	}elseif ($mes>=10 && $mes<=11) {
		echo "Primavera";

	}else{
		echo "Verano";
	}


?>