<?php
// Prime numbers between 0 and 1 million
for ($i = 2; $i <= 1000000; $i++)
    if (isPrime($i))
        print("{$i}\n");

function isPrime($num)
{
    for ($i = 2; $i < $num; $i++)
        if ($num % $i === 0)
            return false;
    return true;
}
