<?php
echo "<table border='1'><tr>"; //inicio de tabla HTML
echo '<tr>'; //fila 1 de celdas
for($cabecera=1;$cabecera <=10;$cabecera++ ){
    echo '<td>'.'Tabla del '.$cabecera.'</td>';
}
echo   '</tr>'; //cierre de fila 1 de celdas

echo '<tr>'; //inicio fila 2 de celdas
    for($i=1;$i<=10;$i++){
        echo '<td>';
        for($j=1;$j<=10;$j++ ){        
            $resultado=$i*$j;
            echo $i.'X'.$j.' = '.$resultado.'<br>';       
    }
    echo '</td>';

}
echo   '</tr>'; //cierre de fila 2 de celdas
echo   "</table>"; //Fin de tabla

?>