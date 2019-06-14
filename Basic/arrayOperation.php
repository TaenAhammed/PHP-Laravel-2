<?php
/*
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

$ages = [];

echo ("Please enter number of ages: \n");
fscanf(STDIN, "%d\n", $n);

$sum = 0;

for ($i = 0; $i < $n; $i++) {
    fscanf(STDIN, "%d\n", $age);
    $sum += $age;
}

$average = (float)($sum / $n);
var_dump($average);
*/

/*
$myInfo = array(
    "Name" => "Taen Ahammed",
    "Age" => 20,
    "Nationality" => "Bangladeshi",
    "IsMarried" => false
);

$myInfo2 = [
    1 => "Taen Ahammed",
    "1" => 20,
    1.4 => "Bangladeshi",
    true => "kdsfjlsd"
];

$myInfo3 = [
    1 => "Taen Ahammed",
    "2" => 20,
    3.4 => "Bangladeshi",
    false => "kdsfjlsd"
];

var_dump($myInfo3);
*/

/*
$info = [];

$info["name"] = "Taen Ahammed";
$info["age"] = 20;

var_dump($info);
*/

/*
$info = [
    "name" => "Taen Ahammed",
    "age" => 20,
    "address" => [
        "street" => [
            "name" => "mosque road",
            "houseNumber" => 5,
            "roadNumber" => 3,
        ],
        "zipcode" => 2252,
        "country" => "Bangladesh"
    ]
];

$info["address"]["street"]["houseNumber"] = 100;
$info["address"]["street"]["blockNumber"] = "E";
$info["address"]["city"] = "Dhaka";

// var_dump($info["address"]["street"]["blockNumber"]);
var_dump($info);
*/

/*
// array dimension
$items = [];

$items[0] = [];
$items[1] = [];

$items[0][0] = [];

$items[0][0][0] = [];
*/

$info = [1, 2, 3, 4, 5, [6, 7, 8, 9]];

// echo (count($info));
// echo (count($info[5]));

unset($info[5]);
print_r($info);
