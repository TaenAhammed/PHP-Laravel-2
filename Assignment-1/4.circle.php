<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo ("Enter radius: ");
fscanf(STDIN, "%f", $radius);


define('PI', 3.1416);

function getAreaOfCircle($radius)
{
    return (PI * $radius * $radius);
}

function getCircumferenceOfCircle($radius)
{
    return (2 * PI * $radius);
}

echo ("Area of circle: " . getAreaOfCircle($radius));
echo ("\n");
echo ("Circumference of circle: " . getCircumferenceOfCircle($radius));
