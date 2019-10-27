<?php 

//https://devskill.com/CodingProblems/ViewProblem/82

$stdin = fopen('php://stdin', 'r');
$stdout = fopen('php://stdout', 'w');

fscanf(STDIN, "%d", $T);

while($T--)
{
    fscanf(STDIN, "%d", $N);
    if($N >= 120) echo "Good Boy Sifat\n"; 
    else echo "Naughty Boy Sifat\n";
}