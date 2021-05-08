<?php /*temperatura
4 funciones, 1ra celsius a fareheit (recibe un parametro y retorna un valor) , 2da farenheit a celsius (recibe un parametrom retorna un valor), 3ra mostrar temperatura (recibe la cant de parametros que queramos), 4ta transformar(recibe una temperatura y como segundo parametro a que lo quiere transformar)*/

function celsiusAF($temperatura)
{
	return (1.8*$temperatura)/32; 
}

function farenheitAC($temperatura)
{
	return ($temperatura-32)/1.8; 
}

function mostrarTemperatura($temperatura , $opcion)
{
	if($temperatura=="entrada no valida"){

		echo "ERROR OPERACION NO VALIDA";
	}
	else
	{
		echo "<h1> CONVERSION </h1>";
		echo "El resultado de la tranformacion es : $temperatura º $opcion";
		echo "<h4> Nombre de la empresa </h4>";
	}


}

function temperatura ($temperatura, $opcion)
{
	switch ($opcion) {
		case 'C':
			$resultado=celsiusAF($temperatura);
			break;
		case 'F':
			$resultado=farenheitAC($temperatura);
			break;
		default:
			$resultado="Opcion incorrecta";
			break;
	}

	mostrarTemperatura($resultado, $opcion);

}

$temperatura1=30; 
$opcion="C"; 

temperatura($temperatura1, $opcion);

$temperatura1=30; 
$opcion="F"; 

temperatura($temperatura1, $opcion);

$temperatura1=30; 
$opcion="s"; 

temperatura($temperatura1, $opcion);






?>
