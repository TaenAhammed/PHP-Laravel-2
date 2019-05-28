<?php

function getEvenOrOddNumber($num)
{
    $result = $num % 2;

    if ($result === 0)
        return true;
    else
        return false;
}
$x = 12;

if (getEvenOrOddNumber($x))
    echo ("Even Number");
else
    echo ("Odd Number");
