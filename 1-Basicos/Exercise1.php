<?php
   // Declaración de dos variables numéricas con valor aleatorio
   $num1 = rand(0,20);
   $num2 = rand(0,20);
    echo "Num1: ".$num1."<br>";
    echo "Num2: ".$num2."<br><br>";

   // Mostrar los resultados de las operaciónes de los dos números anteriores
   echo "SUMA:<br> $num1 + $num2 = ".($num1 + $num2)."<br>";
   echo "RESTA:<br> $num1 - $num2 = ".($num1 - $num2)."<br>";
   echo "DIVISIÓN:<br> $num1 / $num2 = ".($num2==0?"ERROR":($num1/$num2))."<br><br>";
   
   // Mostrar la comparación de las dos variables iniciales
   echo "COMPARACIÓN:<br> $num1 es ". ($num1>$num2?"mayor":($num1<$num2?"menor":"igual"))." que $num2<br><br>";

   //
   echo "ÁREA DEL TRIANGULO:<br>";

   if ($num1>1 && $num2>1) {
    echo "$num1(base) x $num2(altura) / 2 = ". (($num1*$num2)/2);
   } else {
    echo "Los valores son menor o igual a 1";
   }

?>