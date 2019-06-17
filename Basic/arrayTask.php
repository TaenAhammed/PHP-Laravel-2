<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo ("Enter 2D array size: \n");
fscanf(STDIN, "%d\n", $n);

$arr2D = [];

for ($row = 0; $row < $n; $row++) {
    for ($col = 0; $col < $n; $col++) {
        fscanf(STDIN, "%d\n", $arr2D[$row][$col]);
    }
}

print_r($arr2D);


$firstDiagonalSum = 0;
for ($i = 0, $j = 0; $i < $n, $j < $n; $i++, $j++) {
    $firstDiagonalSum += $arr2D[$i][$j];
}

echo ("FirstDiagonalSum: {$firstDiagonalSum} \n");



$secondDiagonalSum = 0;
for ($i = 0, $j = ($n - 1); $i < $n, $j >= 0; $i++, $j--) {
    $secondDiagonalSum += $arr2D[$i][$j];
}

echo ("SecondDiagonalSum: {$secondDiagonalSum} \n");
