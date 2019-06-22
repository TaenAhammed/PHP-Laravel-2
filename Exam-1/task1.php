<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$evenNumbers = [];
$oddNumbers = [];

while (true) {
    fscanf(STDIN, "%d\n", $input);

    if ($input === 0)
        break;
    else {
        if ($input % 2 === 0)
            array_push($evenNumbers, $input);
        else
            array_push($oddNumbers, $input);
    }
}


if (empty($evenNumbers)) {
    echo ("No even number given! \n");
} else {
    $evenNumbersSum = array_sum($evenNumbers);
    print("Even sum: {$evenNumbersSum}\n");
}

if (empty($oddNumbers)) {
    echo ("No odd number given! \n");
} else {
    $oddNumbersProduct = array_product($oddNumbers);
    print("Odd product: {$oddNumbersProduct}\n");
}
