<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo ("Array size: ");
fscanf(STDIN, "%d", $arrSize);

$arr = [];

echo ("Enter array of number: \n");
for ($i = 0; $i < $arrSize; $i++)
    fscanf(STDIN, "%d\n", $arr[]);

// Multiply by 2
for ($i = 0; $i < count($arr); $i++) {
    $temp = $arr[$i] * 2;
    $arr[$i] = $temp;
}

echo ("Multiplied Array: \n");
for ($i = 0; $i < count($arr); $i++)
    echo ($arr[$i] . "\n");
