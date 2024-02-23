<?php

// Definir el numero del que deseamos calcular el factorial
$numero = 7; // Puedes cambiar este numero al que desees calcular su factorial

// Inicializar el factorial como 1
$factorial = 1;

// Calcular el factorial usando un bucle for
for ($i = 1; $i <= $numero; $i++) {
    $factorial *= $i;
}

// Mostrar el factorial por pantalla
echo "el factorial de $numero es: $factorial";
?>