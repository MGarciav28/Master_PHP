<?php
$decimales = 55.45;
$booleano = true;

$mi_primer_variable = 'Hola mundo desde una variable '. $decimales; //ES MAS RAPIDO QUE USANDO ""
$mi_seegunda_cadena = "Hola mundo desde una variable $decimales   \"Estoy escapando unas comillas dobles\"  ";
//PODEMOS USAR EL CARACTER \ PARA USAR CARACTERES RESERVADOS Y QUE NO SE INTERPRETEN

echo '<h2>'. $mi_primer_variable.'</h2>';
echo '<h1>'. $mi_seegunda_cadena.'</h2>';

/*
 TIPOS DE DATOS
 *Entero (int/Integer)
 *Coma flotante (float/double)
 *Cadnas (string)
 *Boolean
 *null
 *Array
 * Objetos 
 */

//gettype(variable) nos regresa el tipo de nuestra variable
echo gettype($mi_primer_variable).'<br>';  
echo gettype($decimales).'<br>';
echo gettype($booleano).'<br>';

/*LAS VARIABLES 
 * No pueden empezar con numeros
 * No pueden incluir - ni simbolos reservados
 * No es recomendable usar caracteres latinos
 *  */

var_dump($decimales); // para detectar tipo y valor de una variable
echo '<br>';

function Holamundo(){
    global $decimales;  
    $year = 2021;
//PARA JALAR UNA VARIABLE GLOBAL A NUESTRAS FUNCIONES ES NECESARIA LA PALABRA
//RESERVADA global ANTES DEL NOMBRE DE NUESTRA VARIABLE
    
    echo '<h2>'.$decimales.'</h2>';
    return $year;
}

echo Holamundo();
?>


