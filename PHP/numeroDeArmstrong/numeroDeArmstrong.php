<?php
/*
 * ¿ES UN NÚMERO DE ARMSTRONG?
 * Dificultad: FÁCIL
 *
 * Enunciado: Escribe una función que calcule si un número dado es un número de Amstrong (o también llamado narcisista).
 * Si no conoces qué es un número de Armstrong, debes buscar información al respecto.
 */
$numAmstrong = 371;
numArmstrong($numAmstrong);
function numArmstrong($numAmstrong)
{
    $numInt = 0;
    if ($numAmstrong < 0) {
        return false;
    } else {
        $numString = str_split(strval($numAmstrong));
        for ($i = 0; $i <= count($numString) - 1; $i++) {
            $numInt = $numInt + (intval($numString[$i])) ** 3;
        }
        print_r($numInt);
    }
}
