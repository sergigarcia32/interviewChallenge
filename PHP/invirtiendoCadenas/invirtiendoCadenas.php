

<?php 
/*
* Crea un programa que invierta el orden de una cadena de texto
* sin usar funciones propias del lenguaje que lo hagan de forma automática.
* - Si le pasamos "Hola mundo" nos retornaría "odnum aloH"
*/
$cadena = "Hola Mundo";
$i = strlen($cadena) -1;

$arrayString = str_split($cadena);
$cadenaInvertida[] = "";
for ($i; $i >= 0 ; $i--) {
    $cadenaInvertida[] = $arrayString[$i];
}
   echo implode($cadenaInvertida);


?>