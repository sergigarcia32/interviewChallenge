<?php

// Bucle que itera desde 1 hasta 100
for ($i = 1; $i <= 100; $i++) {
    // Llama a la función numPrimo para verificar si el número es primo
    if (numPrimo($i)) {
        // Si el número es primo, lo imprime
        echo "Los números primos son " . $i . "\n";
    }
}

// Función que verifica si un número es primo
function numPrimo($number)
{
    // Si el número es menor que 2, no es primo
    if ($number < 2) {
        return false;
    }
    // Verifica divisibilidad desde 2 hasta el número menos uno
    for ($i = 2; $i < $number; $i++) {
        // Si el número es divisible por $i, no es primo
        if ($number % $i == 0) {
            return false;
        }
    }
    // Si no se encuentra ningún divisor, el número es primo
    return true;
}
