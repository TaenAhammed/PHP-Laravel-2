<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $testcase);

for ($i = 0; $i < $testcase; $i++) {

    fscanf(STDIN, "%d %d %d", $bronzeMedalCount, $silverMedalCount, $goldMedalCount);
    
    $scoreFromMedals = ($bronzeMedalCount * 10) + ($silverMedalCount * 50) + ($goldMedalCount * 100);

    fprintf(STDOUT, "%d\n", $scoreFromMedals);
}