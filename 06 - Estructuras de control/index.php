<?php

/*EN PHP SE UTILIZAN LAS CONDICIONALES IF, ELSE IF, SWITCH COMO YA ESTAMOS ACOSTUMBRADOS
LOS COMPARADOREES LOGICOS TAMBIEN SON IGUALES */

//GOTO
echo '<h1>'.'Encabezado 1'.'</h1>';

goto Saltando;                                  
echo '<h2>'.'Enacebezado 2'.'</h2>';
echo '<h2>'.'Enacebezado 3'.'</h2>';
echo '<h2>'.'Enacebezado 4'.'</h2>';
echo '<h2>'.'Enacebezado 5'.'</h2>';
echo '<h2>'.'Enacebezado 6'.'</h2>';

Saltando:
echo '<p>'.'lorem ipsum y el tiro de la mamada'.'</p>';

/*EL COMANDO GOTO SE USA PARA SALTAR LA SECUENCIA HASTA OTRO PUNTO ESTABLECIDO
SU SINTAXIS EES LA SIGUIENTE goto marca_a_donde_saltar
Y REEQUIEERE DE QUE SE CREE LA MARCA QUE INDICA EL BLOQUE DE CODIGO A EJECUTARSE  */
?>
