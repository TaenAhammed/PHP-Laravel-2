<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$strings = [];

while (true) {
    fscanf(STDIN, "%s\n", $input);
    if (strtolower($input) === 'end')
        break;
    else {
        array_push($strings, $input);
    }
}

$strCount = array_count_values($strings);

foreach ($strCount as $key => $value)
    print("{$key}: {$value}\n");
