<?php

/*
    Problem Source: https://devskill.com/CodingProblems/ViewProblem/167
*/

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d\n", $T);

$count = 1;

while ($T--) {
    fscanf(STDIN, "%d\n", $n);


    $sum = 0;

    for ($i = 1; $i <= $n; $i++) {
        $sum = $sum + ($i ** 3);
    }

    echo "Case {$count}: {$sum}\n";

    $count++;
}
