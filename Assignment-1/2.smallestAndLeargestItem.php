<?php

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

echo ("Array size: ");
fscanf(STDIN, "%d", $arrSize);

$arr = [];

echo ("Enter array of number: \n");
for ($i = 0; $i < $arrSize; $i++)
    fscanf(STDIN, "%d\n", $arr[]);

// Get smallest Item
for ($i = 0; $i < count($arr); $i++)
    if (getSmallestItem($arr[$i])) {
        echo ($arr[$i] . " is smallest \n");
        break;
    }

function getSmallestItem($item)
{
    for ($i = 0; $i < count($GLOBALS['arr']); $i++)
        if ($item > $GLOBALS['arr'][$i])
            return false;
    return true;
}

// Get largest Item
for ($i = 0; $i < count($arr); $i++)
    if (getLargestItem($arr[$i])) {
        echo ($arr[$i] . " is largest \n");
        break;
    }

function getLargestItem($item)
{
    for ($i = 0; $i < count($GLOBALS['arr']); $i++)
        if ($item < $GLOBALS['arr'][$i])
            return false;
    return true;
}
