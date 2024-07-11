<?php
$wordOne = "Amor";
$wordTwo = "Roma";

if (isAnagram($wordOne, $wordTwo)) {
    echo "$wordOne y $wordTwo son anagramas.";
} else {
    echo "$wordOne y $wordTwo no son anagramas.";
}

function isAnagram($wordOne,$wordTwo){
    $wordOneLower = strtolower($wordOne);
    $wordTwoLower = strtolower($wordTwo);

    // Verificar si las palabras son iguales
    if ($wordOneLower == $wordTwoLower) {
        return false;
    }

    // Convertir las palabras a arrays de caracteres y ordenarlos
    $wordOneArray = str_split($wordOneLower);
    $wordTwoArray = str_split($wordTwoLower);

    sort($wordOneArray);
    sort($wordTwoArray);

    // Verificar si los arrays son iguales
    return $wordOneArray == $wordTwoArray;
}
?>