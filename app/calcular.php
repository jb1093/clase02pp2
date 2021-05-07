<?php 
//crear dos funciones una llamada sumar y otra llamada dividir, luego crear una función llamada retornar si es cero (si es 0 retorna true sino es 0 retorna false). Hacer otra funcion que se llame calcular 
//Suma recibe nro 1 y nro2, division recibe nro1 y nro2, el de retornar si es cero recibe el numero ingresado y el calcular recibe nro1, operador y nuro 2  
// hacer funcion que se llame mostrar resultado, recibe el resultado como parametro 
// sumar puede sumar siempre y siemore devuelve un dato, dividir solo si el divisor no es cero. retorna la palabra infinito si recibe un cero
// Calcular, si el operando es igual al mas llamo al sumar, si es dividir llamo al dividir 
//cuando sale del switch para hacer el calcular, si hace la cuenta 


//funcion sumar (recibe nro1 y nro2)
function sumar ($nro1 ,$nro2){

	$suma= $nro1+$nro2; 
	return $suma; 
}

//funcion retornar (si es 0 true sino false)
function retornarSiEsCero ($nro2){
	if($nro2==0){
		$retorno= true; 
	} else{
		$retorno=false;
	}

	return $retorno;
}

//funcion dividir (recibe nro1 nro2)
function dividir ($nro1 , $nro2){
	if(retornarSiEsCero($nro2)==true){
		$retorno="Infinito";
	}else{
		$retorno= $nro1/$nro2; 

	}

	return $retorno; 
}

// funcion mostrar resultado (recibe el resultado por parametro)

function mostrarResultado($resultadoParametro){
	return $resultadoParametro;
} 

// funcion calcular aca hacer el switch 
function calcular($nro1, $operador, $nro2){
	switch ($operador) {
	case "+":
		echo "La suma es= ". mostrarResultado(sumar($nro1, $nro2));
		break;
	case "/":
		echo "La division es= ". mostrarResultado(dividir($nro1, $nro2));
		break;
	
	default:
		echo "Operacion no valida";
		break;
}



}

echo "CALCULADORA <br>";

$nro1=rand(0,100);
$nro2=rand(0,100);
$operador="+";

echo "Numero1= $nro1 <br>Numero2= $nro2 <br>Operacion= $operador <br>";

calcular ($nro1, $operador, $nro2);

$nro1=rand(0,100);
$nro2=rand(0,100);
$operador="/";

echo "<br><br>Numero1= $nro1 <br>Numero2= $nro2 <br>Operacion= $operador <br>";

calcular ($nro1, $operador, $nro2);

$nro1=rand(0,100);
$nro2=0;
$operador="/";

echo "<br><br>Numero1= $nro1 <br>Numero2= $nro2 <br>Operacion= $operador <br>";

calcular ($nro1, $operador, $nro2);

$nro1=rand(0,100);
$nro2=rand(0,100);
$operador="&";

echo "<br><br>Numero1= $nro1 <br>Numero2= $nro2 <br>Operacion= $operador <br>";

calcular ($nro1, $operador, $nro2);










 ?>