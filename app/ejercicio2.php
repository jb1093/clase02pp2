<?php
	$precio=rand(1,500);
	$PrecioIva=$precio*1.21;

	echo "El precio es: $precio";
	echo "<br>";
	echo "El precio con IVA es: ". $PrecioIva;


?>