<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo ("Array size: \n");
fscanf(STDIN, "%d\n", $arrSize);

$arr = [];

echo ("Enter Array: \n");
for ($i = 0; $i < $arrSize; $i++) {
    fscanf(STDIN, "%d\n", $arr[]);
}

$arrCopy = $arr;

for ($i = $arrSize - 1, $j = 0; $i >= 0, $j < $arrSize; $i--, $j++) {
    $arr[$j] = $arrCopy[$i];
}


echo ("Reversed Array: \n");
for ($i = 0; $i < $arrSize; $i++) {
    echo ($arr[$i] . "\n");
}
