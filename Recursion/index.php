<?php
$a = [
    ['x', 'y', 'z'],
    [1, 2, 3]
];

// Recursive function
function increment($x)
{
    if ($x > 10)
        return;

    echo ("{$x}\n");
    $x++;
    increment($x);
    echo ("back\n");
}

increment(1);
