<?php
/*PARA DEFINIR UNA CONSTANTE SE UTTILIZA LA SIGUIENTE SINTAXIS
 * define ('nombre de la constante', 'valor de la constante'); 
 */
define('nombre', 'Miguel');
define('web', 'petardas.net');

echo '<h1>'.nombre.'</h1><br>';
echo web;

/*CONSTANTES PREDEFINIDAS
Hay bastantes constantes predefinidas incluidas en PHP y mayormente sirven para 
 * obtener informacion de nueestro sistema, funcion, servidor, etc
*/
echo PHP_OS;
?>