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
    $datos_persona["Edad"] = 24;
    
    foreach ($datos_persona as $key => $value) {
        echo "$key : $value<br>";
    }
    echo "<br>";

    echo "<h3>Ejercicio 4</h3>";

    echo "<br>";

    echo "<h3>Ejercicio 5</h3>";

    echo "<br>";

    echo "<h3>Ejercicio 6</h3>";

    echo "<br>";
?>