<?php

$x = 'taen';

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%s\n", $name);

function greet($name)
{
    echo ("Hello, {$name}. \n");
}

greet($name);

// function getEvenOrOddNumber($num)
// {
//     $result = $num % 2;

//     if ($result === 0)
//         return true;
//     else
//         return false;
// }

// while (true) {

//     fscanf(STDIN, "%d\n", $a);

//     if ($a === 0)
//         break;

//     if (getEvenOrOddNumber($a))
//         echo ("Even Number \n");
//     else
//         echo ("Odd Number \n");
// }
