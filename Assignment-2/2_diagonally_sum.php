<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo ("Enter 2D array size: \n");
fscanf(STDIN, "%d\n", $arrSize);

$arr2D = [];

echo ("Enter 2D array: \n");
for ($row = 0; $row < $arrSize; $row++) {
    for ($col = 0; $col < $arrSize; $col++) {
        fscanf(STDIN, "%d\n", $arr2D[$row][$col]);
    }
}


$firstDiagonalSum = 0;
for ($i = 0, $j = 0; $i < $arrSize, $j < $arrSize; $i++, $j++) {
    $firstDiagonalSum += $arr2D[$i][$j];
}
echo ("FirstDiagonalSum: {$firstDiagonalSum} \n");


$secondDiagonalSum = 0;
for ($i = 0, $j = ($arrSize - 1); $i < $arrSize, $j >= 0; $i++, $j--) {
    $secondDiagonalSum += $arr2D[$i][$j];
}
echo ("SecondDiagonalSum: {$secondDiagonalSum} \n");
