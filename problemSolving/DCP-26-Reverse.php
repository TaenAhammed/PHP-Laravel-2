<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);

for ($i = 0; $i < $testcase; $i++) {

    $str = trim(fgets(STDIN));

    $result = strrev($str);
    fprintf(STDOUT, "%s\n", $result);
}
