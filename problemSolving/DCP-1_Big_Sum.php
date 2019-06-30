<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%s\n", $num1);
fscanf(STDIN, "%s\n", $num2);

$reversedNum1 = strrev($num1);
$reversedNum2 = strrev($num2);

$reversedSum = $reversedNum1 + $reversedNum2;
$actualSum = strrev($reversedSum);

$resultArray = [];

for ($i = 0; $i < strlen($actualSum); $i++) {
    if ($actualSum[$i] != '0') {
        array_push($resultArray, $actualSum[$i]);
    }
}
$output = '';
for ($i = 0; $i < count($resultArray); $i++) {
    // print($resultArray[$i]);
    $output += (string) ($resultArray[$i]);
}
print($output);
