<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');
fscanf(STDIN, "%d\n", $testCases);

for ($i = 0; $i < $testCases; $i++) {

    $input = strtolower(trim(fgets(STDIN)));
    $rev = strrev($input);

    if ($input === $rev)
        $msg = 'Yes';
    else
        $msg = 'No';

    fprintf(STDOUT, "%s\n", $msg);
}
