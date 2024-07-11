<?php
/*
 * Crea una función que reciba dos cadenas como parámetro (str1, str2)
 * e imprima otras dos cadenas como salida (out1, out2).
 * - out1 contendrá todos los caracteres presentes en la str1 pero NO
 *   estén presentes en str2.
 * - out2 contendrá todos los caracteres presentes en la str2 pero NO
 *   estén presentes en str1.
 */
$cadena1 = "Me gusta Java";
$cadena2 = "Me gusta Kotlin";
cadenas($cadena1, $cadena2);
function cadenas($cadena1, $cadena2)
{
    $out1 = "";
    $out2 = "";
    $LettersCadena1 = str_split($cadena1);
    $LettersCadena2 = str_split($cadena2);

    foreach ($LettersCadena1 as $value) {
        if (!in_array($value, $LettersCadena2)) {
            $out1 .= $value;
        }
    }

    foreach ($LettersCadena2 as $value) {
        if (!in_array($value, $LettersCadena1)) {
            $out2 .= $value;
        }
    }

    echo $out1 . "</br>";
    echo $out2;
}
