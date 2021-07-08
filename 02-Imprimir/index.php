<!DOCTYPE HTML>
<html lang ="es">
<head>
<meta charset="utf-8">
<title>
Imprimir por pantalla Master een PHP</title>
</head>
<body>
    <h1>Master en PHP</h1>
    <?="Binvenido al curso de PHP" ?>
    
    <?php
    //TITULAR DE LA SECCION  comentario que solo se ve en elarchivo PHP
    echo "<h3>Listado de videojuegos:</h3>";
    
    /*Esta es 
    una lista 
    de videojuegos 
    modernos          Asi creamos un comentario multilinea */
    
    echo "<ul>"
    ."<li>GTA</li>"         //El punto es el elemento que se usa para cocateenar cadenas
    ."<li>FIFA 21</li>"
    ."<li>God of War"
    ."</ul>";    
    
    echo '<p>Esta es tooda'. ' - '. 'lista de juegos </p>';
    ?>

</body>
</html>