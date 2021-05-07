<?php
//BOGADO JULIETA
$numero=rand(-100,100);
 echo "Numero elegido: $numero ";
	if($numero<0)
{
	echo "<br>El numero es negativo : $numero";
}
	else
{
	while ($numero>=0) {
	echo "<br>$numero";
	$numero--;
}
}



?>