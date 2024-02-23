<?php
// Funcion para verificar si un numero es primo
function esPrimo($numero) {
    // Un numero primo es mayor que 1
    if ($numero <= 1) {
        return false;
    }

    // Verificar si el numero es divisible por algun otro numero que no sea el mismo y 1
    for ($i = 2; $i <= sqrt($numero); $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }

    // Si no se encontraron divisores distintos de 1 y el propio numero, entonces es primo
    return true;
}
// Definir el numero del que queremos verificar si es primo
$numero = 17; // Puedes cambiar este numero al que desees verificar

// Llamar a la funcion esPrimo y mostrar el resultado por pantalla
if (esPrimo($numero)) {
    echo "$numero es un numero primo";
} else {
    echo "$numero no es un numero primo";
}


?>