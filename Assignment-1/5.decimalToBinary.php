<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo ("Enter the decimal number: ");
fscanf(STDIN, "%d", $decimalNumber);

$reversedResult = '';

while (true) {
    $quotient = (int)($decimalNumber / 2);
    $reminder = (int)($decimalNumber % 2);
    $decimalNumber = $quotient;
    $reversedResult .= $reminder;

    if ($quotient === 0) {
        break;
    }
}

$reversedResultString = (string)$reversedResult;

$resultString = '';

for ($i = strlen($reversedResultString) - 1; $i >= 0; $i--) {
    $resultString .= $reversedResultString[$i];
}

echo ("The binary number is: " . $resultString);
