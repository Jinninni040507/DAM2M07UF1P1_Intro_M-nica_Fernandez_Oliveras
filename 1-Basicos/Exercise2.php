<?php
    // DEclaración de variable numérica
    $num = rand(0,15);

    echo "VALOR: ".$num."<br>";

    // Estructura de control condicional Switch para comprobar el dia de la semana

    echo "<h3>Que dia de la semana es?</h3>";
    switch ($num) {
        case 1:
            echo "Lunes";
            break;

        case 2:
            echo "Martes";
            break;

        case 3:
            echo "Miércoles";
            break;

        case 4:
            echo "Jueves";
            break;

        case 5:
            echo "Viernes";
            break;

        case 6:
            echo "Sábado";
            break;

        case 7:
            echo "Domingo";
            break;
        
        default:
            echo "<b>$num</b> no corresponde con ningún dia de la semana.";
            break;
    }


?>