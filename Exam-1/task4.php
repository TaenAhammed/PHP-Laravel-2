<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$chrs = [];

while (true) {
    fscanf(STDIN, "%s\n", $input);
    if (strtolower($input) === 'end')
        break;
    else {
        for ($j = 0; $j < strlen($input); $j++) {

            $occurrence = 0;
            $char = $input[$j];
            for ($i = 0; $i < strlen($input); $i++) {
                if ($char === $input[$i])
                    $occurrence += 1;
            }
            array_push($chrs, $char);
            if (in_array($char, $chrs))
                echo ("{$char}: {$occurrence}\n");
        }
    }
}
