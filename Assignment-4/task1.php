<?php
$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $vertex);
fscanf(STDIN, "%d\n", $edge);

$adjMatrix = [];
$adjList = [];

for ($i = 0; $i < $vertex; $i++) {
    $adjList[$i + 1] = [$i + 1];
    for ($j = 0; $j < $vertex; $j++) {
        $adjMatrix[$i][$j] = 0;
    }
}

for ($i = 0; $i < $edge; $i++) {
    fscanf(STDIN, "%d %d\n", $v1, $v2);
    $ve1 = $v1 - 1;
    $ve2 = $v2 - 1;
    $adjMatrix[$ve1][$ve2] = 1;
    $adjMatrix[$ve2][$ve1] = 1;

    for ($j = 1; $j <= $edge; $j++) {
        if (($j) === $v1) {
            if (!in_array($v2, $adjList[$j]))
                array_push($adjList[$j], $v2);
        }

        if (($j) === $v2) {
            if (!in_array($v1, $adjList[$j]))
                array_push($adjList[$j], $v1);
        }
    }
}

echo ("Adjacency Matrix:\n");
for ($i = 0; $i < $vertex; $i++) {
    for ($j = 0; $j < $vertex; $j++) {
        echo ($adjMatrix[$i][$j] . "\t");
    }
    echo ("\n");
}

echo ("Adjacency List:\n");
foreach ($adjList as $lists) {
    foreach ($lists as $list) {
        echo ("$list-");
    }
    echo ("\n");
}
