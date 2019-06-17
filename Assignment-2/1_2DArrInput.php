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

print_r($arr2D);
