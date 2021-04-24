<?php
	$num1=rand(1,100);
	$num2=rand(1,100);
	$num3=rand(1,100);

	echo "Numeros seleccionados: ".$num1. ";" .$num2. ";". $num3 . "<br>";

	if($num1!=$num2 && $num2!=$num3 && $num1!=$num3){

		if(($num1<$num2 && $num1>$num3)|| ($num1>$num2 && $num1<$num3)) {
			echo "medio= ". $num1;
			} else{
				if(($num2>$num1 && $num2<$num3)||($num2<$num1 && $num2>$num3)){
					echo "medio= ". $num2;
			} else{
					echo "medio=" . $num3;
			} 
		}
	} else {
		echo "No hay medio";
	}
	





?>



