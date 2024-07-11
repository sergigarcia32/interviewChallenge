<?php
/*
 * Crea una función que reciba días, horas, minutos y segundos (como enteros)
 * y retorne su resultado en milisegundos.
 */

 function conversorTiempo($dias, $horas, $minutos, $segundos){

    $daysInMillis = $dias * 24 * 60 * 60 * 1000;
    $hoursInMillis = $horas * 60 * 60 * 1000;
    $minutesInMillis = $minutos * 60 * 1000;
    $secondsToMillis = $segundos * 1000;

    return $daysInMillis + $hoursInMillis + $minutesInMillis + $secondsToMillis;

 }
?>