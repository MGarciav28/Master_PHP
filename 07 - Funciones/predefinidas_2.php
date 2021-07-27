<?php
$nombre = "Miguelon Garcia";

//DEVUELVE EL TIPO DE UNA VARIABLE
echo gettype($nombre);
echo "<br>";

//DETECTA EL TIPO DE LA VARIABLE
if(is_string($nombre)){
    echo "Esa variable es una cadena"; 
}
echo "<br>";

if(!is_float($nombre)){
    echo "La variable nombre no es un numero con decimales";
}
echo "<br>";

//DETECTA SI EXISTE LA VARIABLE DADA
if(isset($edad)){
    echo "La variable existe";
}else{
    echo "La variable no existe";
}
echo "<br>";

//LIMPIA DE ESPACIOS UNA VARIABLE
$frase = "       mi contenido      ";
var_dump(trim($frase));
echo "<br>";

//eliminar variables o indices de arrays
$year = 2020;
echo "$year";

unset($year);
var_dump($year);
echo "<br>";

//Comprobar si variable esta vacia
$texto=null;

if(empty($texto)){
    echo "La variable esta vacia";
}else{
    echo "La variable tiene contenido";
}

echo "<br>";


//Contar caracteres en un String

$cadena ="12345";
echo strlen($cadena);
echo "<br>";

//Encontrat caracterc en una cadena

$frase = "La vida es bella";
echo strpos($frase, "vida");
echo "<br>";

//Reeemplazar palabras de un string
$frase = str_replace("vida", "moto", $frase);
echo $frase;
echo "<br>";

//MAYUSCULAS y minusculas
echo strtolower($frase);
echo "<br>";
echo strtoupper($frase);

?>