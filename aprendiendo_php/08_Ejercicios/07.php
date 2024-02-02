<?php

    echo '<table border= 1>'; //iNICIO DE TABLA
        
    echo '<tr>';//INICIO DE LA FILA
    for($cabecera = 1; $cabecera <= 10; $cabecera++){
        echo  "<td>TABLA DEL $cabecera</td>";
    }
    echo '</tr>';//FIN DE LA FILA

    echo '<tr>';
    for($i= 1; $i <= 10; $i++){
        echo '<td>';
            for($x=1; $x <= 10; $x++){
            echo "$i X $x = ".($x*$i);
            echo "<br>";
        }
        echo '</td>';
    }
    echo '</table>';//FIN DE LA TABLA




?>