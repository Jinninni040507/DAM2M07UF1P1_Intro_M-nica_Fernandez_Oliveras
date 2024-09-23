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

    echo "<br>";
?>