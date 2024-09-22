<?php
    // Declarar dos variables numéricas con valor mínimo de 10.
    $num1 = rand(10,60);
    $num2 = rand(10,60);

    echo  "NUM1: $num1";
    echo "<br>";
    echo  "NUM2: $num2";
    echo "<br><br>";
    
    // Mostrar la progresión numérica de los números pares del 0 a el valor de la variable $num1
    echo "<h4>Mostrar la progresión numérica de los números pares del 0 a el valor de la variable \$num1<h4>";
    for ($i=0; $i < $num1; $i+=2) { 
        echo (($i+2)>=$num1)?"$i --> $num1":"$i, ";
    } 
    echo "<br><br>";
    
    // Mostrar la progresión numérica del $num2 a el valor de la variable 0
    echo "<h4>Mostrar la progresión numérica del \$num2 a el valor de la variable 0<h4>";
    $i = $num2;
    while (0 < $i--) {
        echo ($i == 0)? $i:"$i, ";
    }
        echo "<br><br>";
        
    // Mostrar progresión numérica de $num1 a $num2, si el valor de $num2 es más pequeño solo se imprime $num1
    echo "<h4>Mostrar progresión numérica de \$num1 a \$num2, si el valor de \$num2 es más pequeño solo se imprime \$num1<h4>";
    $a = $num1;
    do {
        echo (($a==$num2)||($num1>$num2))? $a:"$a, ";
    } while ($a++<$num2);

?>