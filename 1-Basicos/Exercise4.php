<?php
    // Generar número aleatorio entre el 1 y el 6 (DADO)
    $num = rand(1,6);
    $cara_opuesta = 7 - $num;
    $dado= ["uno","dos","tres","cuatro","cinco","seis"];
    echo "VALOR: $num<br><br>";

    //Muestra en números y letras el valor obtenido y valor que tendrá el dado en la caraopuesta. (1:6, 2:5, 3:4)
    echo "NUMBERS<br>$num : $cara_opuesta<br><br>";
    echo "LETTERS<br>{$dado[$num-1]} : {$dado[$cara_opuesta-1]}";

?>