<?php
decimalToBinary(387);
decimalToBinary(0);

function decimalToBinary($decimal)
{
    $number = $decimal;
    $binary = "";

    while ($number != 0) {
        $remainder = $number % 2;
        $number = intdiv($number, 2);  // División entera
        $binary = $remainder . $binary;
    }

    return $binary === "" ? "0" : $binary;
}

?>