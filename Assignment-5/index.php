<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $t);

for ($i = 0; $i < $t; $i++) {
    fscanf(STDIN, "%d %d", $row, $col);
    $matrix = [];
    $count = 0;
    $isPrinted = false;
    $notFound = true;


    for ($a = 0; $a < $row; $a++) {
        $line = trim(readline());
        for ($b = 0; $b < $col; $b++) {
            $matrix[$a][$b] = $line[$b];
            if ($matrix[$a][$b] === "$") {
                $count++;
            }
        }
    }

    for ($a = 0; $a < $row; $a++) {
        $isGoldFound = false;
        for ($b = 0; $b < $col; $b++) {
            if ($matrix[$a][$b] === "$") {
                $isGoldFound = true;

                if ($isGoldFound  && $count >= 1 && $isPrinted === false) {
                    fprintf(STDOUT, "Case %d:\n", $i + 1);
                    $isPrinted = true;
                }

                if ($isGoldFound) {
                    fprintf(STDOUT, "%d,%d\n", $a + 1, $b + 1);
                }
                $isGoldFound = false;
            }
        }
        if ($count === 0 && $isGoldFound === false && $notFound === true) {
            fprintf(STDOUT, "Case %d:\n", $i + 1);
            fprintf(STDOUT, "No Gold Found\n");
            $notFound = false;
        }
    }
    $count = 0;
}
