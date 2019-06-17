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

$roomAndRoomsAroundsNumbersSumAndTheirInfo = [];

$sum = 0;
$holdRow = 0;
$holdCol = 0;

for ($row = 0; $row < $arrSize; $row++) {
    for ($col = 0; $col < $arrSize; $col++) {
        $sum = 0;
        $holdRow = $row;
        $holdCol = $col;

        $sum += $arr2D[$row][$col];

        $row -= 1;
        if (!($row < 0)) {
            $sum += $arr2D[$row][$col];
        }

        $row = $holdRow;
        $row += 1;
        if (!($row > ($arrSize - 1))) {
            $sum += $arr2D[$row][$col];
        }

        $row = $holdRow;
        $col -= 1;
        if (!($col < 0)) {
            $sum += $arr2D[$row][$col];
        }

        $col = $holdCol;
        $col += 1;
        if (!($col > ($arrSize - 1))) {
            $sum += $arr2D[$row][$col];
        }
        $col = $holdCol;

        $info = [
            "sum" => $sum,
            "number" => $arr2D[$row][$col],
            "index" => [$row, $col]
        ];

        array_push($roomAndRoomsAroundsNumbersSumAndTheirInfo, $info);
    }
}

$largestSummation = $roomAndRoomsAroundsNumbersSumAndTheirInfo[0]['sum'];
$number = $roomAndRoomsAroundsNumbersSumAndTheirInfo[0]['number'];;
$index = $roomAndRoomsAroundsNumbersSumAndTheirInfo[0]['index'];;

foreach ($roomAndRoomsAroundsNumbersSumAndTheirInfo as $info) {
    if ($info['sum'] > $largestSummation) {
        $largestSummation = $info['sum'];
        $number = $info['number'];
        $index = $info['index'];
    }
}

print("Largest Summation: {$largestSummation}\n");
print("Number: {$number}\n");
print("Index: [{$index[0]},{$index[1]}]");
