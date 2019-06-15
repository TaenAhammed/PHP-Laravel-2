<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

// fscanf(STDIN, "%s\n", $name);

// echo ("$5.8");
// echo ("\$name");
// echo ("Taen sys: \" I'm here.\"");
$name = "Taen sys: \" I'm here.\"";

for ($i = 0; $i < strlen($name); $i++)
    echo ("{$name[$i]}  --> " . ord($name[$i]) . "\n");
