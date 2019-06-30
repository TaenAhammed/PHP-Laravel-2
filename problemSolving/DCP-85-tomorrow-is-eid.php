<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $day);

if($day >= 29 && $day <= 30)
    $eid = 'YES';
else
    $eid = 'NO';

fprintf(STDOUT, "%s\n", $eid);