<?php
    echo "<h1>Ejercicios Arrays</h1>";

    echo "<h3>Ejercicio 1</h3>";
    // Crear un aray asociativo y muestra solo el valor
    
    $datos_persona = [
        "Nombre" => "Sara",
        "Apellido" => "Martínez",
        "Edad" => 23,
        "Ciudad" => "Barcelona",
    ];
    
    $i = 1;
    foreach ($datos_persona as $key => $value) {
        echo "Dato {$i}º : $value<br>";
        $i++;
    }
    
    echo "<br>";
    
    echo "<h3>Ejercicio 2</h3>";
    // Crear un aray asociativo con el tipo de dato como clave(ej. nombre) y el contenido (ej. Sara) como dato
    foreach ($datos_persona as $key => $value) {
        echo "$key : $value<br>";
    }
    
    echo "<br>";
    
    echo "<h3>Ejercicio 3</h3>";
    // Modificar el campo edad del array de 23 a 24
    $datos_persona["Edad"] = 24;
    
    foreach ($datos_persona as $key => $value) {
        echo "$key : $value<br>";
    }
    echo "<br>";
    
    echo "<h3>Ejercicio 4</h3>";
    // Eliminar el campo(clave y value) de ciudad del array asociativo
    unset($datos_persona["Ciudad"]);
    
    var_dump($datos_persona);
    
    echo "<br>";
    
    echo "<h3>Ejercicio 5</h3>";
    $letters = "a,b,c,d,e,f";
    
    // separar y convertir a valores de un array las letras de la cadena de texto
    $array_letters = explode(",",$letters);
    
    // ordenar las letras en orden descendente
    rsort($array_letters);
    
    // mostrar el array
    $i = 1;
    foreach ($array_letters as $key => $value) {
        echo "Letter {$i}º : $value<br>";
        $i++;
    }

    echo "<br>";

    echo "<h3>Ejercicio 6</h3>";
    $notas_alumnos = [
        "Miguel" => 5,
        "Luís" => 7,
        "Marta" => 10,
        "Isabel" => 8,
        "Aitor" => 4,
        "Pepe" => 1,
    ];

    echo "Nota de los estudiantes: ";

    // Ordena los valores de un array asociativo sin romper la relacion entre clave y valor
    asort($notas_alumnos);

    // Mostrar los datos
    foreach ($notas_alumnos as $key => $value) {
        echo $key.": ".$value." ";
    }

    echo "<br>";

    echo "<h3>Ejercicio 7</h3>";

    $suma_notas = 0;
    $contador_notas = 0;
    $a_not_may_med;

    // Hacer la suma total de las notas y calcular cuantas notas hay
    foreach ($notas_alumnos as $key => $value) {
        $suma_notas += $value;
        $contador_notas++;
    }

    // calcular media
    $media_notas = $suma_notas/$contador_notas;

    // formatear resultado media
    $media_formateada = number_format($media_notas, 2);

    // Mostrar alumnos con nota mayor a la media
    echo "Media de las notas: $media_formateada<br><br>Alumnos con nota por encima de la media:<br>";
    foreach ($notas_alumnos as $key => $value) {
        if ($value > $media_notas) {
            echo "$key<br>";
        }
    }

    echo "<br>";

    echo "<h3>Ejercicio 8</h3>";

    echo "<br>";
?>