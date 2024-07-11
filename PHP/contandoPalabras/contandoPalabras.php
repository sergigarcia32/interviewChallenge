<?php
/*
 * Crea un programa que cuente cuantas veces se repite cada palabra
 * y que muestre el recuento final de todas ellas.
 * - Los signos de puntuación no forman parte de la palabra.
 * - Una palabra es la misma aunque aparezca en mayúsculas y minúsculas.
 * - No se pueden utilizar funciones propias del lenguaje que
 *   lo resuelvan automáticamente.
 */

$cadena = "Hola, mi nombre es brais. Mi nombre completo es Brais Moure (MoureDev).";

// Convertir la cadena a minúsculas
$cadena = strtolower($cadena);

// Eliminar signos de puntuación
$cadena = preg_replace("/[,.()]/", "", $cadena);

// Convertir la cadena en un array de palabras
$palabras = explode(" ", $cadena);

// Crear un array para contar las palabras
$contadorPalabras = array();

foreach ($palabras as $palabra) {
    // Contar cada palabra
    if (array_key_exists($palabra, $contadorPalabras)) {
        $contadorPalabras[$palabra]++;
    } else {
        $contadorPalabras[$palabra] = 1;
    }
}

// Mostrar el recuento de palabras
foreach ($contadorPalabras as $palabra => $count) {
    echo "La palabra '$palabra' se repite $count veces." . "</br>";
}
