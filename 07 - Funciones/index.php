<?php
/*FUNCIONES

function nombreDeMiFuncion($parametro){
 * bloque de instrucciones
 }   
 * 
 * 
 nombreDeMiFuncion($parametro);
 * 
 * 
 1.- UNA FUNCION USUALMENTEE NO MANDA A ESCRIBIR
 2.- TODAS LAS FUNCIONES DEBEN RETORNAR ALGO, YA SEA UNA VARIABLE O UN VALOR BOOLEANO
 3.- SE PUEDEN COLOCAR PARAMETROS OPCIONALES EN UNA FUNCION INICIALIZANDOLOS, PARA 
     QUE NUESTRA FUNCION PUEDA TRABAJAR AUNQUE NO SE LE ENVÍE.
*/

function MuestraNombres(){
    $cadena_texto = '';
    $cadena_texto .= "Victor Robles <br>";
    $cadena_texto.= "Alejandro Robles <br>";
    $cadena_texto.= "Juan del Diablo <br>";
    $cadena_texto.= "Victor Stone <br>";
      
    return $cadena_texto;
}


/* FORMA BASICA PERO NO RECOMENDABLE
function tabla($numero){
    echo 'Tabla del '.$numero.'<br>';
    $cadena='';
    for($i=1;$i<=10;$i++){
        echo $numero.' X '.$i.' = '. $numero*$i;
        echo '<br>';
    }
}
*/

function tabla($numero){
    //echo 'Tabla del '.$numero.'<br>';
    $cadena='';
    for($i=1;$i<=10;$i++){
        $cadena.= $numero.' X '.$i.' = '. $numero*$i;
        $cadena.= '<br>';
    }
    return $cadena;
}

function calculadora($numero1, $numero2, $negrita=false){
    $suma =$numero1 + $numero2;
    $resta = $numero1 - $numero2;
    $multiplicacion = $numero1*$numero2;
    $division = $numero1 / $numero2;
    
    if($negrita){
        echo '<h2>';
    }
    echo "Suma: $suma </br>";
    echo "Resta: $resta </br>";
    echo "Multiplicacion: $multiplicacion </br>";
    echo "Division: $division </br>";
    echo '<hr>';
    if($negrita){
        echo '</h2>';
    }

}

function devuelveNombre($nombre){
    return "El nombre es: $nombre";
}


//echo MuestraNombres();

echo "Tabla del 5 <br>";
echo tabla(5);

/*for($j=1; $j<=10; $j++){
    tabla($j);
    echo '<hr>';
}
 */

/*
calculadora(10,2);
calculadora(55,12,true);
calculadora(23,8);
*/

echo devuelveNombre('Miguel');


?>
