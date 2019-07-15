<?php
// Fibonacci numbers between 1 and 40
$x = 0;
$y = 1;

while (true) {
    $fibonacci = $x + $y;
    if ($fibonacci > 1000000)
        break;
    $x = $y;
    $y = $fibonacci;

    echo ("{$y} ");
}
