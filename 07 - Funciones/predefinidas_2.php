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
unset($year);
var_dump($year);


?>