<?php
    $impares = 0;
    $pares = 0;
    $suma = 0;

    do {
        $num = rand(0,20);
        $suma += $num;
        
        (($num % 2) == 0)? $pares++:$impares++;
        echo "$num _";

    } while ($suma < 100);

    echo "<br><br>Suma de todos los numeros generados:<br>$suma<br><br>Total de números pares: $pares<br>Total de números impares: $impares";

?>