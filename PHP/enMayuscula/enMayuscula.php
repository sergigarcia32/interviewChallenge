<?php
/*
 * Crea una función que reciba un String de cualquier tipo y se encargue de
 * poner en mayúscula la primera letra de cada palabra.
 * - No se pueden utilizar operaciones del lenguaje que
 *   lo resuelvan directamente.
 */

$cadena = 'hola me llamo sergi';
upperCase($cadena);
function upperCase($cadena)
{
    // Separar la cadena en palabras
    $palabrasArray = explode(" ", $cadena);
    $resultadoArray = [];

    // Iterar sobre cada palabra
    foreach ($palabrasArray as $palabra) {
        // Convertir la primera letra a mayúscula y concatenar con el resto de la palabra
        $primeraLetra = strtoupper($palabra[0]);
        $restoPalabra = substr($palabra, 1);
        $resultadoArray[] = $primeraLetra . $restoPalabra;
    }

    // Unir las palabras nuevamente en una cadena
    $cadenaFinal = implode(" ", $resultadoArray);

    echo $cadenaFinal;
}
