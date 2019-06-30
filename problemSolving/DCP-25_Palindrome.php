<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%s\n", $testCases);

while ($testCases--) {
    fscanf(STDIN, "%s\n", $input);
    if ($input === strrev($input))
        $msg = 'Yes';
    else
        $msg = 'No';

    fprintf(STDOUT, "%s\n", $msg);
}
