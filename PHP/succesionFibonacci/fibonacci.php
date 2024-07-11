<?php

fibonacci();

function fibonacci()
{
    $n0 = 0;
    $n1 = 1;

    for ($i = 1; $i <= 50; $i++) {
        echo $n0 . "\n";

        $fib = $n0 + $n1;
        $n0 = $n1;
        $n1 = $fib;
    }
}
