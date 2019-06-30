<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%s\n", $testCases);

while ($testCases--) {
    fscanf(STDIN, "%s\n", $input);
    if ($input === strrev($input))
        print("Yes\n");
    else
        print("No\n");
}
