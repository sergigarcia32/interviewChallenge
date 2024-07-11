<?php
/*
 * Escribe una función que reciba un texto y retorne verdadero o
 * falso (Boolean) según sean o no palíndromos.
 * Un Palíndromo es una palabra o expresión que es igual si se lee
  * de izquierda a derecha que de derecha a izquierda.
 * NO se tienen en cuenta los espacios, signos de puntuación y tildes.
 * Ejemplo: Ana lleva al oso la avellana.
 */
$cadena = "Ana lleva al oso la avellana.";
$cadena2 = "Adivina ya te opina, ya ni miles origina, ya ni cetro me domina, ya ni monarcas, a repaso ni mulato carreta, acaso nicotina, ya ni cita vecino, anima cocina, pedazo gallina, cedazo terso nos retoza de canilla goza, de pánico camina, ónice vaticina, ya ni tocino saca, a terracota luminosa pera, sacra nómina y ánimo de mortecina, ya ni giros elimina, ya ni poeta, ya ni vida.";
$cadena3 = "¿Qué os ha parecido el reto?";
palindromo($cadena);
palindromo($cadena2);
palindromo($cadena3);
function palindromo($cadena)
{
    $palindromo = "";
    $cadena= strtolower($cadena);

    $cadenaLimpia = str_replace(
        ['á', 'é', 'í', 'ó', 'ú', 'ñ', ' ', '.', ',', '¿', '?', '!', '¡'],
        ['a', 'e', 'i', 'o', 'u', 'n', '', '', '', '', '', '', ''],
        $cadena
    );

    for ($i = strlen($cadenaLimpia) - 1; $i >= 0; $i--) {
        $palindromo = $palindromo . $cadenaLimpia[$i];
    }
   
    if ($cadenaLimpia == $palindromo) {
        echo $cadena . " és un palindromo </br>";
    } else {
        echo $cadena ." no és un plaindromo </br>";
    }
}
