<?php
$nombre = "Miguelon";

var_dump($nombre);  
echo '<br>';


echo date('d-m-y').'<br>';     //PARA OBTENER LA FECHA EN EL FORMATO Y CON LOS PARAMTROS QUE SE LE INDIQUEN
echo time();                   //PARA OBTEENER FECHA EN FORMATO UNIX (PURO MINISEGUNDO)

echo '<br>';
echo "Raiz cuadrada de 16= ". sqrt(16).'<br>';                  //PARA OBTENER RAIZ CUADRADA DE UN NÚMRO
echo "Numeero aleatorio entre 10 y 40 ".rand(10,40).'<br>';     //PARA OBTENER UN NUMERO ALEATORIO ENTRE UN RANGO DADO
echo "Numero Pi: ". pi().'<br>';                                //PARA OBTENER EL NUMERO PI
echo "Redondear: ". round(7.596145).'<br>';                     //PARA REDONDEAR A ENTEROS UN NÚMERO DECIMAL DADO
echo "Redondear: ". round(7.596145,2).'<br>';                   //PARA REDONDEAR UN NÚMERO A LOS DECIMALES DADOS

?>