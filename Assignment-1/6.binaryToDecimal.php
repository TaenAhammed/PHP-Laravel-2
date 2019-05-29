<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo ("Enter the binary number: ");
fscanf(STDIN, "%d", $binaryNumber);

$binaryNumberString = (string)$binaryNumber;

$decimalNumber = 0;
$power = 0;

for ($i = strlen($binaryNumberString) - 1; $i >= 0; $i--) {
    binaryToDecimal($binaryNumberString[$i]);
}

function binaryToDecimal($number)
{

    $sum = ((int)$number) * (2 ** $GLOBALS['power']);
    $GLOBALS['decimalNumber'] += $sum;

    $GLOBALS['power']++;
}

echo ("The decimal number: {$decimalNumber} \n");
