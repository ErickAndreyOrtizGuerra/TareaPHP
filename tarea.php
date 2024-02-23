<?php
// Definir el numero del que queremos mostrar la tabla de multiplicar
$numero = 34; // Puedes cambiar este numero al que desees mostrar su tabla de multiplicar

// Mostrar la tabla de multiplicar
echo "Tabla de multiplicar del $numero:\n";
for ($i = 1; $i <= 10; $i++) {
    $resultado = $numero * $i;
    echo "$numero x $i = $resultado\n";
}
?>