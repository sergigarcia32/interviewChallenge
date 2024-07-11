<?php 

fizzBuzz();

function fizzBuzz(){
    for ($i = 1; $i <= 100; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            print("FIZZBUUZZ");
        } else if ($i % 3 == 0) {
            print("FIZZ");
        } else if ($i % 5 == 0) {
            print("BUZZ");
        } else {
            print($i);
        }echo "</br>";
    }
}
?>